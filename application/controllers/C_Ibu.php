<?php
class C_Ibu extends CI_Controller{
	
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ibu');
	}
	function index(){
		$data = $this->session->userdata('level');
		$id['tb_periksa_ibu'] = $this->M_Ibu->tampil_periksa($data)->result();
	$this->db->select('*');    
    $this->db->from('bidan');
    $hj=$this->db->get()->result();
	$data2=array(
			"x"=>$hj,
		);
		
			$this->load->view('ibu/template/header', $id);
			$this->load->view('ibu/beranda',$data2);
			$this->load->view('ibu/template/footer');
	}
	
	public function pesan(){
		$data = $this->session->userdata('level');
		 $this->db->select('*');    
    $this->db->from('bidan');
    $hj=$this->db->get()->result();
	$data2=array(
			"x"=>$hj,
		);
		
			$this->load->view('ibu/template/header_login');
			$this->load->view('ibu/beranda',$data2);
			$this->load->view('ibu/template/footer_login');
	}
	public function home(){
		$data = $this->session->userdata('level');
		 $this->db->select('*');    
    $this->db->from('artikel');
	$this->db->join('tema', 'artikel.id_tema = tema.id_tema');
    $hj=$this->db->get()->result();
	$data2=array(
			"x"=>$hj,
		);
		
			$this->load->view('ibu/template/header_login');
			$this->load->view('ibu/artikel',$data2);
			$this->load->view('ibu/template/footer_login');
	}
	public function artikel($id){
		$data = $this->session->userdata('level');
		 $this->db->select('*');    
    $this->db->from('artikel');
	$this->db->join('tema', 'artikel.id_tema = tema.id_tema');
	$this->db->where(array('id_artikel'=> $id));
    $hj=$this->db->get()->result();
	$data2=array(
			"x"=>$hj,
		);
		
			$this->load->view('ibu/template/header_login');
			$this->load->view('ibu/single',$data2);
			$this->load->view('ibu/template/footer_login');
	}
	
  public function add()
	{
		$session= $this->session->userdata('id_user');
		$id= $this->session->userdata('id_userchat');
		$this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=>$id , 'id_ibu'=> $session));
		$query=$this->db->get();
      if ($query->num_rows() == 0){
		  $data=array(
				"id_ibu"=>$this->session->userdata('id_user'),
				"id_bidan"=>$id,
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
		$this->db->where(array('id_bidan'=> $id, 'id_ibu'=> $session));
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
		$this->db->where(array('id_bidan'=> $id, 'id_ibu'=> $session));
		$query=$this->db->get();
      if ($query->num_rows() == 0){
		
	  }else{
		  $this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $id, 'id_ibu'=> $session));
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
		redirect(base_url("C_Ibu")); 
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
		$this->db->where(array('percakapan.id_bidan'=> $id, 'percakapan.id_ibu'=> $session));
		//$this->db->where();
		//$this->db->order_by('users.user_id','Desc');
		$user=$this->db->get()->result();
		$data=array(
			"all"=>$user,
		);
		$this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $id, 'id_ibu'=> $session));
		$query=$this->db->get()->result();
		 $arr=$query;
		foreach($arr as $datae):	
		$dataer=array(
				"read_bidan"=>'Sudah',
			);
		 
		$this->db->where('id_pesan', $datae->id_pesan);
		$this->db->update('detail_percakapan',$dataer);
		endforeach;
		
		$this->load->view('ibu/chat',$data);		
		//$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
	}
}