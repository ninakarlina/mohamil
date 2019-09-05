 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tema extends CI_Controller {  
  
  function __construct(){
        parent::__construct();
        $this->load->model('M_Tema');        
		$this->load->helper(array('form', 'url'));

  }
  
  function index(){	
		$data['tema'] = $this->M_Tema->tampil_data()->result();
		
		$this->load->view('admin/template/header', $data);
        $this->load->view('admin/tema/tema_artikel', $data);
        $this->load->view('admin/template/footer', $data);

  }
  
  function form_input(){
	
		$this->load->view('admin/template/header');	
        $this->load->view('admin/tema/input_tema');
        $this->load->view('admin/template/footer');
  }
  
  public function insert(){
    	  
    $data = array(
    	'id_tema'	=> $this->input->post('id_tema'),
		'tema'      => $this->input->post('tema'),
	);
			 
	$this->M_Tema->insert($data);
	
    redirect(base_url() . "C_Tema" ,'refresh');
  } 
  
  function form_update($id_tema){ 	
	
	$where = array('id_tema' => $id_tema);
	$data['tema'] = $this->M_Tema->edit_data($where,'tema')->result();
		
		
        $this->load->view('admin/template/header');	
        $this->load->view('admin/tema/edit_tema', $data);
        $this->load->view('admin/template/footer');
  }
    	
  public function update(){
       
    $data = array(
				    'id_tema'	=> $this->input->post('id_tema'),
					'tema'      => $this->input->post('tema'),
	);
		
	$where = array('id_tema' => $this->input->post('id_tema'));
         
	$this->M_Tema->update_data($where,$data,'tema');
          
    redirect(base_url() . "C_Tema" ,'refresh');
        
  }
  
  function delete($id_tema){
	
	$where = array('id_tema' => $id_tema);
	
	$this->M_Tema->delete_data($where,'tema');
	
	redirect(base_url() . "C_Tema" ,'refresh');
  }

  function list_artikel(){

  	$data['artikel'] = $this->M_Tema->tampil_artikel('artikel')->result();
  	// print_r($data);
  	// dd();

  	$this->load->view('admin/template/header');	
    $this->load->view('admin/artikel/list_artikel', $data);
    $this->load->view('admin/template/footer');	
  }

  function add_artikel(){
  	$data['tema'] = $this->M_Tema->tampil_data()->result_array();

  	$this->load->view('admin/template/header');	
    $this->load->view('admin/artikel/add_artikel', $data);
    $this->load->view('admin/template/footer');	
  }

  function save_artikel(){

  		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['file_name'] 			= time().$_FILES["gambar"]['name'];

		// print_r($config['allowed_types']);
		$data = array(
					'id_tema'		=> $this->input->post('id_tema'),
    				'judul'			=> $this->input->post('judul'),
					'tgl'     		=> $this->input->post('tgl'),
					'isi_artikel' 	=> $this->input->post('isi_artikel'),
					'gambar' 		=> $config['file_name']
				 );

		print_r($data);
 
		$this->load->library('upload', $config);
 		$insert = $this->M_Tema->insert_artikel('artikel', $data);

		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			echo "error";
		}else{
			$data = array('upload_data' => $this->upload->data());
			redirect(base_url('C_Tema/list_artikel'));
		}
  }

  function delete_artikel($id_artikel){
	
	$where = array('id_artikel' => $id_artikel);
	$this->M_Tema->delete_artikel($where,'artikel');
	
	redirect(base_url() . "C_Tema/list_artikel" ,'refresh');
  }


  	function form_update_artikel($id_artikel){ 	
	
	$where = array('id_artikel' => $id_artikel);
	$data['artikel'] = $this->M_Tema->edit_artikel($where,'artikel')->result();
				
        $this->load->view('admin/template/header');	
        $this->load->view('admin/artikel/edit_artikel', $data);
        $this->load->view('admin/template/footer');
	}

     
     public function update_artikel(){
     	$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['file_name'] 			= time().$_FILES["gambar"]['name'];
       
    	$data = array(
			'judul' 	    => $this->input->post('judul'),
			'isi_artikel'   => $this->input->post('isi_artikel'),
			'tgl'      		=> $this->input->post('tgl'),
			'gambar' 		=> $config['file_name']
		);

		$this->load->library('upload', $config);
		$where = array('id_artikel' => $this->input->post('id_artikel'));

		$user=$this->input->post('id_artikel');
		$this->db->where($where);
		$this->db->update('artikel', $data);      
		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			echo "error";
		}else{
			$data = array('upload_data' => $this->upload->data());
			redirect(base_url() . "C_Tema/list_artikel" ,'refresh');
		}
        
  }
  
}
	
?>
