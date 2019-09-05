<?php
class Chat extends CI_Controller{
	
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ibu'); // nambahin ini
	}
	function index(){
		$data = $this->session->userdata('level');
		$id['tb_periksa_ibu'] = $this->M_Ibu->tampil_periksa($data)->result();
		$this->db->select('*');    
	    $this->db->from('ibu_hamil');
	    //$this->db->join('m_vehicle', 'vehicle_in.license_plate = m_vehicle.license_plate');
	    //$this->db->where(array('vehicle_in.user_id' => $session));
	    $hj=$this->db->get()->result();
		
		$data2=array(
			"x"=>$hj,
		);

		
		if ($data == "bidan") {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/chat_konsul',$data2);
			$this->load->view('bidan/template/footer');
		}
		elseif ($data == "ibu") {
			$this->db->select('*');    
		    $this->db->from('bidan');
		    $bidan=$this->db->get()->result();
		    
		    $data_bidan=array(
				"list_bidan"=>$bidan,
			);

			$this->load->view('ibu/template/header', $id);
			$this->load->view('ibu/chat_konsul',$data_bidan);
			$this->load->view('ibu/template/footer');
		}
			
	}
  public function add()
	{
		$session= $this->session->userdata('id_user');
		$id= $this->session->userdata('id_userchat');
		$this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $session, 'id_ibu'=> $id));
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
				"read_ibu"=>'Belum',
			);
			$this->db->insert('detail_percakapan',$dataer);
			//$this->session->unset_userdata('id_chat');
	  }else{
		  $this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $session, 'id_ibu'=> $id));
		$query=$this->db->get()->result();
		 $arr=$query;
		foreach($arr as $data):	
		$dataer=array(
				"id_pesan"=>$data->id_pesan,
				"id_kirim"=>$this->session->userdata('id_user'),
				"pesan"=>$_POST['message'],
				"waktu"=>date('Y-m-d H:i:s'),
				"read_bidan"=>'Sudah',
				"read_ibu"=>'Belum',
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
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $session, 'id_ibu'=> $id));
		$query=$this->db->get();
      if ($query->num_rows() == 0){
		
	  }else{
		  $this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $session, 'id_ibu'=> $id));
		$query=$this->db->get()->result();
		 $arr=$query;
		foreach($arr as $data):	
		$dataer=array(
				"read_bidan"=>'Sudah',
			);
		 
		$this->db->where('id_pesan', $data->id_pesan);
		$this->db->update('detail_percakapan',$dataer);
		endforeach;
	  }
		redirect(base_url("C_User")); 
	}
	public function chat()
	{
		$session= $this->session->userdata('id_user');
		$id= $this->session->userdata('id_userchat');
		// $get = $this->m_produk->get_data('users',array('user_id' =>$session));
		$this->db->select('*');
		$this->db->from('detail_percakapan');
		$this->db->join('percakapan', 'detail_percakapan.id_pesan = percakapan.id_pesan');
		$this->db->join('bidan', 'percakapan.id_bidan = bidan.id_user');
		$this->db->join('ibu_hamil', 'percakapan.id_ibu = ibu_hamil.id_user');
		$this->db->where(array('percakapan.id_bidan'=> $session, 'percakapan.id_ibu'=> $id));
		//$this->db->where();
		//$this->db->order_by('users.user_id','Desc');
		$user=$this->db->get()->result();
		$data=array(
			"all"=>$user,
		);
		$this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $session, 'id_ibu'=> $id));
		$query=$this->db->get()->result();
		 $arr=$query;
		foreach($arr as $datae):	
		$dataer=array(
				"read_bidan"=>'Sudah',
			);
		 
		$this->db->where('id_pesan', $datae->id_pesan);
		$this->db->update('detail_percakapan',$dataer);
		endforeach;
		
		$this->load->view('chat_konsul',$data);		
		//$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
	}
}