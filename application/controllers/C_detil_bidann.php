 <?php
class C_detil_bidann extends CI_Controller{
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Bidan');
		$this->load->helper(array('form', 'url'));
	}
	function index(){
		$data['bidan'] = $this->M_Bidan->tampil_user('bidan')->result();
		// print_r($data);
  		// die();

		$this->load->view('admin/template/header');	
		$this->load->view('admin/data_bidan/list_bidan', $data);
		$this->load->view('admin/template/footer');
	}

    
  function form_input(){
	
		$this->load->view('admin/template/header');	
        $this->load->view('admin/data_bidan/add_bidan');
        $this->load->view('admin/template/footer');
  }
  
  public function insert(){
   
   $data = array(
    				'id_user'		  		=> $this->input->post('id_user'),
					'username'      		=> $this->input->post('username'),
					'password'    			=> $this->input->post('password'),
					'level'       	  		=> $this->input->post('level'),
					
				 );
			 
	$this->M_Bidan->insert($data, 'user'); 	  
   
   	$id_user = $this->db->insert_id();
    $datas = array(
    				'id_bidan'		  		=> '',
					'nama_bidan'      		=> $this->input->post('nama_bidan'),
					'alamat_bidan'    		=> $this->input->post('alamat_bidan'),
					'email'       	  		=> $this->input->post('email'),
					'tlp_bidan'      		=> $this->input->post('tlp_bidan'),
					'tempat_lahir_bidan'	=> $this->input->post('tempat_lahir_bidan'),
					'tgl_lahir_bidan'       => $this->input->post('tgl_lahir_bidan'),
					'id_user'				=> $id_user,

				 );
			 
	$this->M_Bidan->insert($datas, 'bidan');
	
    redirect(base_url() . "C_detil_bidann" ,'refresh');
  } 
  
  public function read($id_bidan){
  	$where = array('id_bidan' => $id_bidan);
	$data['bidan'] = $this->M_Bidan->tampil_bidan($where,'bidan')->result();
		
		
        $this->load->view('admin/template/header');	
        $this->load->view('admin/data_bidan/read_bidan');
        $this->load->view('admin/template/footer');
		 
    }

  function form_update($id_bidan){ 	
	
	$where = array('id_user' => $id_bidan);
	$data['bidan'] = $this->M_Bidan->tampil_user($id_bidan)->result();
	// $data[''] = $this->M_Bidan->tampil_user($id_bidan)->result();
		
        $this->load->view('admin/template/header');	
        $this->load->view('admin/data_bidan/edit_bidan', $data);
        $this->load->view('admin/template/footer');
  }
    	
  public function update_bidan(){
    
    $data = array(
					'username'      		=> $this->input->post('username'),
					'password'    			=> $this->input->post('password'),
					'level'       	  		=> $this->input->post('level'),
					
				 );
	$user=$this->input->post('id_user');
	$where = array('id_user' => $user);
	$this->db->where($where);
	$this->db->update('user', $data);
	
	//$this->M_Bidan->update_bidan($data, 'user'); 	  
   
   	//$id_user = $this->db->insert_id();
    $datas = array(
    				'nama_bidan'      		=> $this->input->post('nama_bidan'),
					'alamat_bidan'    		=> $this->input->post('alamat_bidan'),
					'email'       	  		=> $this->input->post('email'),
					'tlp_bidan'      		=> $this->input->post('tlp_bidan'),
					'tempat_lahir_bidan'	=> $this->input->post('tempat_lahir_bidan'),
					'tgl_lahir_bidan'       => $this->input->post('tgl_lahir_bidan'),
				 );
			 
	$where = array('id_user' => $this->input->post('id_user'));
    $this->db->where($where);
	$this->db->update('bidan', $datas);  
	//$this->M_Bidan->update_bidan($where, $datas,'bidan');
    redirect(base_url() . "C_detil_bidann" ,'refresh');
  } 
  
  function delete_bidan($id_bidan){
	
	$where = array('id_bidan' => $id_bidan);
	
	$this->M_Bidan->delete_bidan($where,'bidan');
	
	redirect(base_url() . "C_detil_bidann" ,'refresh');
  }

  function chat(){
		$data['bidan'] = $this->M_Bidan->tampil_user('bidan')->result();
		// print_r($data);
  		// die();

		$this->load->view('admin/template/header');	
		$this->load->view('admin/data_bidan/list_bidan', $data);
		$this->load->view('admin/template/footer');
	}
}
