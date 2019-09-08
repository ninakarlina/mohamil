 <?php
class C_Daftar extends CI_Controller{
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ibu');
		$this->load->helper(array('form', 'url'));
	}
	function index(){
		
			$data['ibu_hamil'] = $this->M_Ibu->tampil_user('ibu_hamil')->result();

			$this->load->view('admin/template/header');
			$this->load->view('admin/daftar/list_daftar', $data);
			$this->load->view('admin/template/footer');

	}

  function form_input(){
	
		$pengguna = $this->session->userdata('level');

		if ($pengguna == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/data_user/add_user');
			$this->load->view('admin/template/footer');
		}elseif ($pengguna == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/data_user/add_user');
			$this->load->view('bidan/template/footer');
		}else{
			exit();
		}


  }
  
  public function insert(){
    	  
    $data = array(
    				'id_user'		=> $this->input->post('id_user'),
					'nama'			=> $this->input->post('nama'),
					'username'    	=> $this->input->post('username'),
					'password'  	=> $this->input->post('password'),
					'email'     	=> $this->input->post('email'),
					'level'     	=> $this->input->post('level'),

				 );
			 
	$this->M_Data_user->insert($data);
	
    redirect(base_url() . "C_Data_user" ,'refresh');
  } 
  
  function form_update($id_user){ 	
	
	$where = array('id_user' => $id_user);
	$data['user'] = $this->M_Data_user->edit_data($where,'user')->result();
 
			$this->load->view('admin/template/header');
			$this->load->view('admin/user/edit_user', $data);
			$this->load->view('admin/template/footer');
  }
    	
  public function update_data(){
        
    $data = array(
				    'id_user'		=> $this->input->post('id_user'),
					'nama'			=> $this->input->post('nama'),
					'username'    	=> $this->input->post('username'),
					'password'  	=> $this->input->post('password'),
					'level'     	=> $this->input->post('level'),

	);
		
	$where = array('id_periksa_ibu' => $this->input->post('id_periksa_ibu'));
         
	$this->M_Periksa->update_data($where,$data,'tb_periksa_ibu');
          
    redirect(base_url() . "C_Periksa" ,'refresh');
        
  }
  
  function delete_data($id_periksa_ibu){
	
	$where = array('id_periksa_ibu' => $id_periksa_ibu);
	
	$this->M_Periksa->delete_data($where,'tb_periksa_ibu');
	
	redirect(base_url() . "C_Periksa" ,'refresh');
  }

  public function search(){

    $search = $this->input->post('search');
    $data['ibu_hamil'] =  $this->M_Ibu->search($search);
    

    	$this->load->view('bidan/template/header');
		$this->load->view('bidan/periksa_ibu/add_periksa', $data);
		$this->load->view('bidan/template/footer');
	}

}
