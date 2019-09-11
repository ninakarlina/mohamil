 <?php
class C_Kes_ibu extends CI_Controller{
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ibu');
		//$this->load->model('M_Periksa');
		$this->load->model('M_Kes_ibu');
		$this->load->helper(array('form', 'url'));
	}
	function index(){

		$user = $this->session->userdata('level');
		// $data['catatan_kes_ibu'] = $this->M_Kes_ibu->tampil_data()->result();
		$data['catatan_kes_ibu'] = $this->M_Ibu->tampil_kesehatan('catatan_kes_ibu')->result();

		if ($user == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/kesehatan_ibu/list_kes_ibu', $data);
			$this->load->view('admin/template/footer');
		}elseif ($user == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/kesehatan_ibu/list_kes_ibu', $data);
			$this->load->view('bidan/template/footer');
		}else{
			$this->load->view('login');
		}

	}

  function form_input(){
	
		$this->load->view('bidan/template/header');
		$this->load->view('bidan/kesehatan_ibu/add_kes_ibu');
		$this->load->view('bidan/template/footer');

  }
  
  public function insert(){
    	  
    $data = array(
    				'id_kes_ibu'		  				=> $this->input->post('id_kes_ibu'),
					'hpht'      						=> $this->input->post('hpht'),
					'htp'    							=> $this->input->post('htp'),
					'lila'      						=> $this->input->post('lila'),
					'tb'     							=> $this->input->post('tb'),
					'kontrasepsi_seb_hamil'				=> $this->input->post('kontrasepsi_seb_hamil'),
					'riwayat_penyakit'       			=> $this->input->post('riwayat_penyakit'),
					'riwayat_alergi'       				=> $this->input->post('riwayat_alergi'),
					'jml_persalinan'       				=> $this->input->post('jml_persalinan'),
					'jml_abortus'       				=> $this->input->post('jml_abortus'),
					'jml_anak_hidup'					=> $this->input->post('jml_anak_hidup'),
					'jml_premature'       				=> $this->input->post('jml_premature'),
					'jarak_hamil_persalinan_terakhir'   => $this->input->post('jarak_hamil_persalinan_terakhir'),
					'status_imun_akhir'       			=> $this->input->post('status_imun_akhir'),
					'cara_persalinan_akhir'      	 	=> $this->input->post('cara_persalinan_akhir'),
					'id_ibu'							=> $this->input->post('id_ibu')

				 );
    	// print_r($data);
    	// die();
	$this->M_Kes_ibu->insert($data);
	
    redirect(base_url() . "C_Kes_ibu" ,'refresh');
  } 
  
  function form_update($id_kes_ibu){ 	
	
	$where = array('id_kes_ibu' => $id_kes_ibu);
	$data['catatan_kes_ibu'] = $this->M_Kes_ibu->edit_data($where,'catatan_kes_ibu')->result();
 
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/kesehatan_ibu/edit_ibu', $data);
			$this->load->view('bidan/template/footer');
  }
    	
  public function update_ibu(){
        
    $data = array(
				    'id_kes_ibu'		  				=> $this->input->post('id_kes_ibu'),
					'hpht'      						=> $this->input->post('hpht'),
					'htp'    							=> $this->input->post('htp'),
					'lila'      						=> $this->input->post('lila'),
					'tb'     							=> $this->input->post('tb'),
					'kontrasepsi_seb_hamil'				=> $this->input->post('kontrasepsi_seb_hamil'),
					'riwayat_penyakit'       			=> $this->input->post('riwayat_penyakit'),
					'riwayat_alergi'       				=> $this->input->post('riwayat_alergi'),
					'jml_persalinan'       				=> $this->input->post('jml_persalinan'),
					'jml_abortus'       				=> $this->input->post('jml_abortus'),
					'jml_anak_hidup'					=> $this->input->post('jml_anak_hidup'),
					'jml_premature'       				=> $this->input->post('jml_premature'),
					'jarak_hamil_persalinan_terakhir'   => $this->input->post('jarak_hamil_persalinan_terakhir'),
					'status_imun_akhir'       			=> $this->input->post('status_imun_akhir'),
					'penolong_persalinan'       		=> $this->input->post('penolong_persalinan'),
					'cara_persalinan_akhir'      	 	=> $this->input->post('cara_persalinan_akhir'),
					'id_ibu'							=> $this->input->post('id_ibu')
	);
		
	$where = array('id_kes_ibu' => $this->input->post('id_kes_ibu'));
         
	$this->M_Kes_ibu->update_data($where,$data,'catatan_kes_ibu');
          
    redirect(base_url() . "C_Kes_ibu" ,'refresh');
        
  }
  
  function delete_ibu($id_kes_ibu){
	
	$where = array('id_kes_ibu' => $id_kes_ibu);
	
	$this->M_Kes_ibu->delete_data($where,'catatan_kes_ibu');
	
	redirect(base_url() . "C_kes_ibu" ,'refresh');
  }


}
