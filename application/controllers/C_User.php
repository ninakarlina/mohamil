<?php
class C_User extends CI_Controller{
	
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ibu');
	}
	function index(){
	$data = $this->session->userdata('level');
	$data2['total_ibu'] = $this->M_Ibu->hitungJumlahIbu();
	$data2['total_bidan'] = $this->M_Ibu->hitungJumlahBidan();
	$data2['total_tema'] = $this->M_Ibu->hitungJumlahTema();
	$data2['total_artikel'] = $this->M_Ibu->hitungJumlahArtikel();

		if ($data == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/beranda', $data2);
			$this->load->view('admin/template/footer');
		}elseif ($data == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/beranda');
			$this->load->view('bidan/template/footer');
		}else{
			$this->load->view('login');
		}
	}

	function in(){
		$data = $this->session->userdata('level');
		$this->db->select('*');    
	    $this->db->from('ibu_hamil');
	    $hj=$this->db->get()->result();

		$data2=array(
			"x"=>$hj,
			"posisi" => "in"
		);
		
		if ($data == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/beranda');
			$this->load->view('admin/template/footer');
		}elseif ($data == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/chat_konsul', $data2);
			$this->load->view('bidan/template/footer');
		}else{
			$this->load->view('login');
		}
	}

  public function add()
	{
		$session= $this->session->userdata('id_user');
		$this->db->select('*');    
		$this->db->from('bidan');
		$this->db->where('id_user', $session);
		$bidan=$this->db->get()->result();
		$id_bidan = $bidan[0]->id_bidan;

		$id= $this->session->userdata('id_userchat');
		$this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $id_bidan, 'id_ibu'=> $id));
		$query=$this->db->get();
      if ($query->num_rows() == 0){
		  $data=array(
				"id_ibu"=>$id,
				"id_bidan"=>$this->session->userdata('id_user'),
		 );
			$this->db->insert('percakapan',$data);
			$kode=$this->db->insert_id();
			//$kode='1';
			$dataer=array(
				"id_pesan"=>$kode,
				"id_kirim"=>$this->session->userdata('id_user'),
				"pesan"=>$_POST['message'],
				"waktu"=>date('Y-m-d H:i:s'),
				"read_bidan"=>'Sudah',
				// "read_ibu"=>'Belum',
			);
			$this->db->insert('detail_percakapan',$dataer);
			//$this->session->unset_userdata('id_chat');
	  }else{
		  $this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $id_bidan, 'id_ibu'=> $id));
		$query=$this->db->get()->result();
		 $arr=$query;
		foreach($arr as $data):	
		$dataer=array(
				"id_pesan"=>$data->id_pesan,
				"id_kirim"=>$this->session->userdata('id_user'),
				"pesan"=>$_POST['message'],
				"waktu"=>date('Y-m-d H:i:s'),
				"read_bidan"=>'Sudah',
				// "read_ibu"=>'Belum',
			);
			$this->db->insert('detail_percakapan',$dataer);
		endforeach;
	  }
		
			//$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
	}
	public function percakapan($id){
		$this->session->unset_userdata('id_userchat');
		$newdata = array(
              'id_userchat'  => $id,
            );
        $this->session->set_userdata($newdata);
		$session= $this->session->userdata('id_user');

		$this->db->select('*');    
		$this->db->from('bidan');
		$this->db->where('id_user', $session);
		$bidan=$this->db->get()->result();
		$id_bidan = $bidan[0]->id_bidan;
		
		$this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $id_bidan, 'id_ibu'=> $id));
		$query=$this->db->get();
      if ($query->num_rows() == 0){
		
	  }else{
		  $this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $id_bidan, 'id_ibu'=> $id));
		$query=$this->db->get()->result();
		 $arr=$query;
		 
		foreach($arr as $data):	
		$dataer=array(
				"read_bidan"=>'Sudah',
			);
		// print_r($arr);
		$this->db->where('id_pesan', $data->id_pesan);
		$this->db->update('detail_percakapan',$dataer);
		endforeach;
	  }
		redirect(base_url("C_User/in")); 
	}
	public function chat()
	{		
		$session= $this->session->userdata('id_user'); //id_user? bidan?
		$this->db->select('*');    
		$this->db->from('bidan');
		$this->db->where('id_user', $session);
		$bidan=$this->db->get()->result();
		$id_bidan = $bidan[0]->id_bidan;
		// $get = $this->m_produk->get_data('users',array('user_id' =>$session));
		$id= $this->session->userdata('id_userchat'); //id pasien = 14
		$this->db->select('*');
		$this->db->from('detail_percakapan');
		$this->db->join('percakapan', 'detail_percakapan.id_pesan = percakapan.id_pesan');
		$this->db->join('bidan', 'percakapan.id_bidan = bidan.id_bidan');
		$this->db->join('ibu_hamil', 'percakapan.id_ibu = ibu_hamil.id_user');
		$this->db->where('percakapan.id_bidan', $id_bidan);
		$this->db->where('percakapan.id_ibu', $id);
		// $this->db->where(array('percakapan.id_bidan'=> $id_bidan, 'percakapan.id_ibu'=> $id));
		//$this->db->where();
		//$this->db->order_by('users.user_id','Desc');
		$user=$this->db->get()->result();
		// print_r($user);
		$data=array(
			"all"=>$user,
		);
		$this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $id_bidan, 'id_ibu'=> $id));
		$query=$this->db->get()->result();
		 $arr=$query;
		foreach($arr as $datae):	
		$dataer=array(
				"read_bidan"=>'Sudah',
			);
		 
		$this->db->where('id_pesan', $datae->id_pesan);
		$this->db->update('detail_percakapan',$dataer);
		endforeach;
		
		// print_r($data['all']);
		$this->load->view('bidan/chat',$data);		
		//$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
	}
}