 <?php
class C_Periksa extends CI_Controller{
	public function __construct() {
		parent:: __construct();
		$this->load->model('M_Login');
		$this->load->model('M_Ibu');
		$this->load->model('M_Daftar');
		$this->load->model('M_Periksa');
		// $this->load->model('M_Kes_ibu');
		$this->load->helper(array('form', 'url'));
	}
	function index(){

		$user = $this->session->userdata('level');
		$data['tb_periksa_ibu'] = $this->M_Ibu->tampil_periksa($user)->result();

		if ($user == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/periksa_ibu/list_periksa', $data);
			$this->load->view('admin/template/footer');
		}elseif ($user == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/periksa_ibu/list_periksa', $data);
			$this->load->view('bidan/template/footer');
		}else{
			exit();
		}

	}

  function form_input(){
		
		$user = $this->session->userdata('level');
		$data['ibu_hamil'] = $this->M_Ibu->tampil_user('ibu_hamil')->result();
	

		if ($user == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/data_ibu/list_ibu_hamil', $data);
			$this->load->view('admin/template/footer');
		}elseif ($user == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/data_ibu/list_ibu_hamil', $data);
			$this->load->view('bidan/template/footer');
		}else{
			exit();
		}

  }

  function periksa(){
		
		$user = $this->session->userdata('level');
		$data['ibu_hamil'] = $this->M_Ibu->tampil_user('ibu_hamil')->result();
		$data['id_bidan'] = $this->M_Daftar->get_id_bidan()->result();
		$data['daftar_periksa'] = $this->M_Daftar->tampil_data_di_bidan()->result();
		
		// print_r($id_bidan[0]->id_bidan);

		if ($user == 'admin') {
			$this->load->view('admin/template/header');
			$this->load->view('admin/data_ibu/daftar_ibu', $data);
			$this->load->view('admin/template/footer');
		}elseif ($user == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/data_ibu/daftar_ibu', $data);
			$this->load->view('bidan/template/footer');
		}else{
			exit();
		}

  }
  function form_add($id){

  	$id_bidan = $this->M_Daftar->get_id_bidan()->result();

  	$data = array(
		'id_bidan' 		=> $id_bidan[0]->id_bidan
	);
	$where = array('id_ibu' => $id);
	$this->db->where($where);
	$this->db->update('daftar_periksa', $data);
	// print_r($id_bidan[0]->id_bidan);

	$user = $this->session->userdata('level');
	$data['ibu_hamil'] = $this->M_Periksa->tampil_data('ibu_hamil')->result();

	$user = $this->session->userdata('id_user');
			$where = array('id_ibu' => $id);

			$this->db->select('*');
            $this->db->from('ibu_hamil');
            $this->db->join('tb_periksa_ibu','ibu_hamil.id_ibu=tb_periksa_ibu.id_ibu');
            $this->db->where('ibu_hamil.id_ibu',$id);
            $query = $this->db->get()->result();
			$this->db->select('*');
            $this->db->from('ibu_hamil');
			$this->db->where('id_ibu',$id);
            $querye = $this->db->get()->result();
			$this->db->select('tgl_periksa,berat_badan');    
			$this->db->from('tb_periksa_ibu');
			$this->db->where('id_ibu',$id);
			$check=$this->db->get()->result();
			$datae = json_encode($check);
			$this->db->select('tgl_periksa,tinggi_fundus');    
			$this->db->from('tb_periksa_ibu');
			$this->db->where('id_ibu',$id);
			$check1=$this->db->get()->result();
			$dataee = json_encode($check1);
			$this->db->select('tgl_periksa,denyut_jantung_bayi');    
			$this->db->from('tb_periksa_ibu');
			$this->db->where('id_ibu',$id);
			$check2=$this->db->get()->result();
			$dataeee = json_encode($check2);
			$data=array(
				"title"=>'tampil_admin',
				"all"=>$query,
				"data"=>$datae,
				"darah"=>$dataee,
				"jantung"=>$dataeee,
				"alle"=>$querye,
			);
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/periksa_ibu/add_periksa', $data);
			$this->load->view('bidan/template/footer');
		
  }
  function riwayat($id){
		
		$user = $this->session->userdata('level');
		$data['ibu_hamil'] = $this->M_Periksa->tampil_data('ibu_hamil')->result();
		$id_ibu['tb_periksa_ibu'] = $this->M_Ibu->tampil_periksa($user)->result();
	//$user = $this->session->userdata('id_user');
			//$where = array('id_ibu' => $id);
			$this->db->select('*');
            $this->db->from('ibu_hamil');
            $this->db->join('tb_periksa_ibu','ibu_hamil.id_ibu=tb_periksa_ibu.id_ibu','left');
            $this->db->join('catatan_kes_ibu','ibu_hamil.id_ibu=catatan_kes_ibu.id_ibu','left');
            $this->db->where('ibu_hamil.id_ibu',$id);
            $query = $this->db->get()->result();
			$this->db->select('*');
            $this->db->from('ibu_hamil');
			$this->db->where('id_ibu',$id);
            $querye = $this->db->get()->result();
			$this->db->select('tgl_periksa,berat_badan');    
			$this->db->from('tb_periksa_ibu');
			$this->db->where('id_ibu',$id);
			$check=$this->db->get()->result();
			$datae = json_encode($check);
			$this->db->select('tgl_periksa,tinggi_fundus');    
			$this->db->from('tb_periksa_ibu');
			$this->db->where('id_ibu',$id);
			$check1=$this->db->get()->result();
			$dataee = json_encode($check1);
			$this->db->select('tgl_periksa,denyut_jantung_bayi');    
			$this->db->from('tb_periksa_ibu');
			$this->db->where('id_ibu',$id);
			$check2=$this->db->get()->result();
			$dataeee = json_encode($check2);
			$data=array(
			"title"=>'tampil_admin',
			"all"=>$query,
			"data"=>$datae,
			"darah"=>$dataee,
			"jantung"=>$dataeee,
			"alle"=>$querye,
			);
			if ($user == 'bidan') {
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/periksa_ibu/riwayat', $data);
			$this->load->view('bidan/template/footer');
		}elseif ($user == 'ibu') {
			$this->load->view('ibu/template/header', $id_ibu);
			$this->load->view('ibu/periksa_ibu/riwayat', $data);
			$this->load->view('ibu/template/footer');
		}
		
  }
  
  public function insert(){
   $user = $this->session->userdata('id_user');
   $ibu= $this->input->post('id_ibu');
   $this->input->post('id_periksa_ibu');
    $data = array(
    				'id_periksa_ibu'		 	=> $this->input->post('id_periksa_ibu'),
					'id_ibu'					=> $this->input->post('id_ibu'),
					'berat_badan'    			=> $this->input->post('berat_badan'),
					'umur_kehamilan'      		=> $this->input->post('umur_kehamilan'),
					'letak_janin'     			=> $this->input->post('letak_janin'),
					'tinggi_fundus'				=> $this->input->post('tinggi_fundus'),
					'keluhan'       			=> $this->input->post('keluhan'),
					'tekanan_darah'       		=> $this->input->post('tekanan_darah'),
					'denyut_jantung_bayi'       => $this->input->post('denyut_jantung_bayi'),
					'kaki_bengkak'       		=> $this->input->post('kaki_bengkak'),
					'hasil_lab'					=> $this->input->post('hasil_lab'),
					'tindakan'       			=> $this->input->post('tindakan'),
					'nasehat'   				=> $this->input->post('nasehat'),
					'tgl_periksa'       		=> $this->input->post('tgl_periksa'),
					'tgl_kembali'      	 		=> $this->input->post('tgl_kembali'),
					'id_bidan'      	 		=> $user,

				 );
			 
	$this->M_Periksa->insert($data);
	
    redirect(base_url('C_Periksa/riwayat/'.$ibu));
  } 
  
  function form_update($id_periksa_ibu){ 	
	
	$where = array('id_periksa_ibu' => $id_periksa_ibu);
	$data['tb_periksa_ibu'] = $this->M_Periksa->edit_data($where,'tb_periksa_ibu')->result();
 
			$this->load->view('bidan/template/header');
			$this->load->view('bidan/periksa_ibu/edit_periksa', $data);
			$this->load->view('bidan/template/footer');
  }
    	
  public function update_data(){
        
    $data = array(
				    'id_periksa_ibu'		 	=> $this->input->post('id_periksa_ibu'),
					'id_ibu'					=> $this->input->post('id_ibu'),
					'berat_badan'    			=> $this->input->post('berat_badan'),
					'umur_kehamilan'      		=> $this->input->post('umur_kehamilan'),
					'letak_janin'     			=> $this->input->post('letak_janin'),
					'tinggi_fundus'				=> $this->input->post('tinggi_fundus'),
					'keluhan'       			=> $this->input->post('keluhan'),
					'tekanan_darah'       		=> $this->input->post('tekanan_darah'),
					'denyut_jantung_bayi'       => $this->input->post('denyut_jantung_bayi'),
					'kaki_bengkak'       		=> $this->input->post('kaki_bengkak'),
					'hasil_lab'					=> $this->input->post('hasil_lab'),
					'tindakan'       			=> $this->input->post('tindakan'),
					'nasehat'   				=> $this->input->post('nasehat'),
					'tgl_periksa'       		=> $this->input->post('tgl_periksa'),
					'tgl_kembali'      	 		=> $this->input->post('tgl_kembali'),
					'id_bidan'      	 		=> $this->input->post('id_bidan'),
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
