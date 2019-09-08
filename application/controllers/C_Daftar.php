 <?php
class C_Daftar extends CI_Controller{
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ibu');
		$this->load->library('session');
		$this->load->model('M_Daftar');
		$this->load->helper(array('form', 'url'));
	}
	function index(){
		
			$data['ibu_hamil'] = $this->M_Ibu->tampil_user()->result();
			$data['daftar_periksa'] = $this->M_Daftar->tampil_data()->result();

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
   	date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
	$now = date('Y-m-d');
	$nama = $this->input->post('ibu');

	$this->db->select('nama_ibu, id_ibu');
	$this->db->from('ibu_hamil');			
	$this->db->where('nama_ibu', $nama);			
	$bidan=$this->db->get()->result();

	// print_r($bidan[0]->id_ibu);

    $data = array(
		'id_ibu'     	=> $bidan[0]->id_ibu,
		'tgl_daftar'     	=> $now,
	 );
			 
	$this->M_Daftar->insert($data);

	$this->session->set_flashdata("message", "
		<div class='alert alert-success' role='alert'>
			Ibu telah didaftarkan
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        		<span aria-hidden='true'>&times;</span>
        	</button>
        </div>");
	
    redirect(base_url() . "C_Daftar" ,'refresh');
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
