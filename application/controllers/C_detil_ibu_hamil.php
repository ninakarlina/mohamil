 <?php
class C_detil_ibu_hamil extends CI_Controller{
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ibu');
		//$this->load->model('M_Periksa');
		$this->load->helper(array('form', 'url'));
	}
	function index(){

		$user = $this->session->userdata('level');
		$id = $this->session->userdata('id_user');
		$data['tb_periksa_ibu'] = $this->M_Ibu->tampil_periksa($user)->result();
		$data['ibu_hamil'] = $this->M_Ibu->tampil_ibu_hamil($id)->result();
		$id_ibu = $data['ibu_hamil'][0]->id_ibu;
		$where = array('id_ibu' => $id_ibu);
		$data['ibu'] = $this->M_Ibu->edit_ibu($id);
		$data['catatan_kes_ibu'] = $this->M_Ibu->edit_ibu2($where);
		// print_r($where);
		$data['kode'] = $this->M_Ibu->buat_kode();

		$this->load->view('ibu/template/header', $data);
		$this->load->view('ibu/data_ibu/detail_ibu', $data);
		$this->load->view('ibu/template/footer');
	
	}
	
	function read($id_ibu){ 	
	
	$where = array('id_ibu' => $id_ibu);
	$data['kode'] = $this->M_Ibu->buat_kode();
	$data['ibu_hamil'] = $this->M_Ibu->edit_ibu($where);
	$data['catatan_kes_ibu'] = $this->M_Ibu->edit_ibu2($where);
    $user = $this->session->userdata('level');

		if ($user == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/data_ibu/detail_ibu', $data);
			$this->load->view('admin/template/footer');
		}elseif ($user == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/data_ibu/detail_ibu', $data);
			$this->load->view('bidan/template/footer');
		}else{
			exit();
		}
  }

  function form_input(){
	
		$user = $this->session->userdata('level');
		$data['kode'] = $this->M_Ibu->buat_kode();

		if ($user == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/data_ibu/add_ibu', $data);
			$this->load->view('admin/template/footer');
		}elseif ($user == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/data_ibu/add_ibu', $data);
			$this->load->view('bidan/template/footer');
		}else{
			exit();
		}

  }

public function insert(){

   	  $data = array(
    				'id_user'		  		=> $this->input->post('id_user'),
					'username'      		=> $this->input->post('username'),
					'password'    			=> $this->input->post('password'),
					'level'       	  		=> $this->input->post('level'),
					
				 );
			 
	$this->M_Ibu->insert($data, 'user'); 	  
   
   	$id_user = $this->db->insert_id();
    $datas = array(
    				'id_ibu'		  					=> $this->input->post('id_ibu'),
    				'id_user'		  					=> $id_user,
    				'kode_ibu'							=> $this->input->post('kode_ibu'),
					'nama_ibu'      					=> $this->input->post('nama_ibu'),
					'tempat_lahir_ibu'    				=> $this->input->post('tempat_lahir_ibu'),
					'tgl_lahir_ibu'      				=> $this->input->post('tgl_lahir_ibu'),
					'kehamilan_ke'     					=> $this->input->post('kehamilan_ke'),
					'agama_ibu'							=> $this->input->post('agama_ibu'),
					'pendidikan_ibu'     			  	=> $this->input->post('pendidikan_ibu'),
					'goldar_ibu'       					=> $this->input->post('goldar_ibu'),
					'pekerjaan_ibu'      			 	=> $this->input->post('pekerjaan_ibu'),
					'nama_suami'       					=> $this->input->post('nama_suami'),
					'tempat_lahir_suami'				=> $this->input->post('tempat_lahir_suami'),
					'agama_suami'       				=> $this->input->post('agama_suami'),
					'pendidikan_suami'   			   	=> $this->input->post('pendidikan_suami'),
					'goldar_suami'       				=> $this->input->post('goldar_suami'),
					'pekerjaan_suami'      				=> $this->input->post('pekerjaan_suami'),
					'alamat_rumah'       				=> $this->input->post('alamat_rumah'),
					'kecamatan'       					=> $this->input->post('kecamatan'),
					'kabupaten'       					=> $this->input->post('kabupaten'),
					'no_tlp'       						=> $this->input->post('no_tlp'),

				 );
			 
	$this->M_Ibu->insert($datas, 'ibu_hamil');

	$id_ibu = $this->db->insert_id();
    $data3 = array(

    				'id_kes_ibu'      					=> '',
					'id_ibu'    						=> $id_ibu,
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
					'cara_persalinan_akhir'      	 	=> $this->input->post('cara_persalinan_akhir'),);
	
	$this->M_Ibu->insert($data3, 'catatan_kes_ibu');
    redirect(base_url() . "C_detil_ibu" ,'refresh');  
} 
  
  function form_update($id_ibu){ 	
	
	$where = array('id_ibu' => $id_ibu);
	$data['kode'] = $this->M_Ibu->buat_kode();
	$data['ibu_hamil'] = $this->M_Ibu->edit_ibu($where);
	$data['catatan_kes_ibu'] = $this->M_Ibu->edit_ibu2($where);
    $user = $this->session->userdata('level');

		
	$this->load->view('ibu/template/header');
	$this->load->view('bidan/data_ibu/edit_ibu', $data);
	$this->load->view('bidan/template/footer');
		
  }
    	
  public function update_ibu(){
        
    $data = array(
				    'id_ibu'		  					=> $this->input->post('id_ibu'),
				    'kode_ibu'							=> $this->input->post('kode_ibu'),
					'nama_ibu'      					=> $this->input->post('nama_ibu'),
					'tempat_lahir_ibu'    				=> $this->input->post('tempat_lahir_ibu'),
					'tgl_lahir_ibu'      				=> $this->input->post('tgl_lahir_ibu'),
					'kehamilan_ke'     					=> $this->input->post('kehamilan_ke'),
					'agama_ibu'							=> $this->input->post('agama_ibu'),
					'pendidikan_ibu'       				=> $this->input->post('pendidikan_ibu'),
					'goldar_ibu'       					=> $this->input->post('goldar_ibu'),
					'pekerjaan_ibu'       				=> $this->input->post('pekerjaan_ibu'),
					'nama_suami'       					=> $this->input->post('nama_suami'),
					'tempat_lahir_suami'				=> $this->input->post('tempat_lahir_suami'),
					'agama_suami'       				=> $this->input->post('agama_suami'),
					'pendidikan_suami'      			=> $this->input->post('pendidikan_suami'),
					'goldar_suami'       				=> $this->input->post('goldar_suami'),
					'pekerjaan_suami'       			=> $this->input->post('pekerjaan_suami'),
					'alamat_rumah'       				=> $this->input->post('alamat_rumah'),
					'kecamatan'       					=> $this->input->post('kecamatan'),
					'kabupaten'       					=> $this->input->post('kabupaten'),
					'no_tlp'       						=> $this->input->post('no_tlp'),
					

	);
		
	$where = array('id_ibu' => $this->input->post('id_ibu'));
    $this->db->where($where);
	$this->db->update('ibu_hamil',$data);
	
	$datas = array(
				    'username'							=> $this->input->post('username'),
				    'password'							=> $this->input->post('password'),
	);
	
	$where = array('id_user' => $this->input->post('id_user'));
    $this->db->where($where);
	$this->db->update('user',$datas);
	//$this->M_Ibu->update_ibu($where,$data,'ibu_hamil');

	 $data3 = array(

    				
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
				);
	 	$where = array('id_ibu' => $this->input->post('id_ibu'));
    $this->db->where($where);
	$this->db->update('catatan_kes_ibu',$data3);
	//$this->M_Ibu->update_ibu($where,$data3,'catatan_kes_ibu');
          
    redirect(base_url() . "C_detil_ibu_hamil" ,'refresh');
        
  }
  
  function delete_ibu($id_ibu){
	
	$where = array('id_ibu' => $id_ibu);
	
	$this->M_Ibu->delete_ibu($where,'ibu_hamil');
	
	redirect(base_url() . "C_detil_ibu" ,'refresh');
  }

}
