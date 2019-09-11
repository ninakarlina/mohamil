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
		
		if ($data == "bidan") {
			$this->db->select('*');    
		    $this->db->from('ibu_hamil');
		    $hj=$this->db->get()->result(); //MEngambil data ibu hamil yang bisa dichat

		    $session= $this->session->userdata('id_user'); //id_user? bidan?
			$this->db->select('*');    
			$this->db->from('bidan');
			$this->db->where('id_user', $session);
			$bidan=$this->db->get()->result();
			$id_bidan = $bidan[0]->id_bidan; //Mengambil id_bidan dari tabel bidan

			$this->db->select('id_user');    
		    $this->db->from('ibu_hamil');
		    $id_user=$this->db->get()->result(); //MEngambil data ibu hamil yang bisa dichat

		    for ($i=0; $i < count($id_user); $i++) { 
		    	$this->db->select('*');
				$this->db->from('detail_percakapan');
				$this->db->join('percakapan', 'detail_percakapan.id_pesan = percakapan.id_pesan');
				$this->db->join('bidan', 'percakapan.id_bidan = bidan.id_bidan');
				$this->db->join('ibu_hamil', 'percakapan.id_ibu = ibu_hamil.id_user');
				$this->db->where('percakapan.id_bidan', $id_bidan);
				$this->db->where('percakapan.id_ibu', $id_user[$i]->id_user);
				$this->db->where('detail_percakapan.read_bidan', "Belum");
				$user[]=$this->db->get()->result(); // Jumlah chat yang belum dibaca
		    }
			
			
			$data2=array(
				"x"=>$hj,
				"unread" => $user,
				"posisi" => "select"	
			);
			// print_r(count($user[1]));
			// echo "<br>";
			// echo "<br>";
			// print_r($hj);

			$this->load->view('bidan/template/header');
			$this->load->view('bidan/chat_konsul',$data2);
			$this->load->view('bidan/template/footer');
		}
		elseif ($data == "ibu") {
			 
			$this->db->select('*');    
			$this->db->from('bidan');
			$bidan=$this->db->get()->result();
			// $this->db->where('id_user', $session);
			
			// $id_bidan = $bidan[0]->id_bidan; //Mengambil id_bidan dari tabel bidan

		    $id = $this->session->userdata('id_user'); //id user ibu//MEngambil data ibu hamil yang bisa dichat

		    for ($i=0; $i < count($bidan); $i++) { 
		    	$this->db->select('*');
				$this->db->from('detail_percakapan');
				$this->db->join('percakapan', 'detail_percakapan.id_pesan = percakapan.id_pesan');
				$this->db->join('bidan', 'percakapan.id_bidan = bidan.id_bidan');
				$this->db->join('ibu_hamil', 'percakapan.id_ibu = ibu_hamil.id_user');
				$this->db->where('percakapan.id_bidan', $bidan[$i]->id_bidan);
				$this->db->where('percakapan.id_ibu', $id);
				$this->db->where('detail_percakapan.read_ibu', "Belum");
				$user[]=$this->db->get()->result(); // Jumlah chat yang belum dibaca
		    }
		    									   	//	
		    $data_bidan=array(						//
				"list_bidan"=>$bidan,
				"unread" => $user,
				"posisi" => "select"				//
			); 				
			
			// print_r(count($user[0]));


			$this->load->view('ibu/template/header', $id);
			$this->load->view('ibu/chat_konsul',$data_bidan); //Ngerubah variabel yang dikirim konten, karena id_bidan sering ketuker sama id_user
			$this->load->view('ibu/template/footer');
		}
		else{
			$this->load->view('login');		
		}
			
	}


	function hitung(){
		$data = $this->session->userdata('level');
		$id['tb_periksa_ibu'] = $this->M_Ibu->tampil_periksa($data)->result();
		
		if ($data == "bidan") {
			$this->db->select('*');    
		    $this->db->from('ibu_hamil');
		    $hj=$this->db->get()->result(); //MEngambil data ibu hamil yang bisa dichat

		    $session= $this->session->userdata('id_user'); //id_user? bidan?
			$this->db->select('*');    
			$this->db->from('bidan');
			$this->db->where('id_user', $session);
			$bidan=$this->db->get()->result();
			$id_bidan = $bidan[0]->id_bidan; //Mengambil id_bidan dari tabel bidan

			$this->db->select('id_user');    
		    $this->db->from('ibu_hamil');
		    $id_user=$this->db->get()->result(); //MEngambil data ibu hamil yang bisa dichat

		    for ($i=0; $i < count($id_user); $i++) { 
		    	$this->db->select('*');
				$this->db->from('detail_percakapan');
				$this->db->join('percakapan', 'detail_percakapan.id_pesan = percakapan.id_pesan');
				$this->db->join('bidan', 'percakapan.id_bidan = bidan.id_bidan');
				$this->db->join('ibu_hamil', 'percakapan.id_ibu = ibu_hamil.id_user');
				$this->db->where('percakapan.id_bidan', $id_bidan);
				$this->db->where('percakapan.id_ibu', $id_user[$i]->id_user);
				$this->db->where('detail_percakapan.read_bidan', "Belum");
				$user[]=$this->db->get()->result(); // Jumlah chat yang belum dibaca
		    }
			
			
			
			// $counting=array(						//
			// 	"unread" => count($user)//
			// );
			// print_r(count($counting));
			$unread = 0;

			for ($i=0; $i < count($user); $i++) { 
				if (count($user[$i]) != 0) {
					$unread++;
				}
			}


			print_r($unread);
			// // echo "<br>";
			// // echo "<br>";
			// // print_r($hj);

			 // return $counting;
			// $this->load->view('bidan/chat_konsul',$data2);
			// $this->load->view('bidan/template/footer');
		}
		elseif ($data == "ibu") {
			 
			$this->db->select('*');    
			$this->db->from('bidan');
			$bidan=$this->db->get()->result();

		    $id = $this->session->userdata('id_user'); //id user ibu//MEngambil data ibu hamil yang bisa dichat

		    for ($i=0; $i < count($bidan); $i++) { 
		    	$this->db->select('*');
				$this->db->from('detail_percakapan');
				$this->db->join('percakapan', 'detail_percakapan.id_pesan = percakapan.id_pesan');
				$this->db->join('bidan', 'percakapan.id_bidan = bidan.id_bidan');
				$this->db->join('ibu_hamil', 'percakapan.id_ibu = ibu_hamil.id_user');
				$this->db->where('percakapan.id_bidan', $bidan[$i]->id_bidan);
				$this->db->where('percakapan.id_ibu', $id);
				$this->db->where('detail_percakapan.read_ibu', "Belum");
				$user[]=$this->db->get()->result(); // Jumlah chat yang belum dibaca
		    }
		    
		    $unread = 0;

			for ($i=0; $i < count($user); $i++) { 
				if (count($user[$i]) != 0) {
					$unread++;
				}
			}

		    print_r($unread);
		    									   	//	
		 //    $data_bidan=array(						//
			// 	"list_bidan"=>$bidan,
			// 	"unread" => $user,
			// 	"posisi" => "select"				//
			// ); 				
			
			// print_r(count($user));


			// $this->load->view('ibu/template/header', $id);
			// $this->load->view('ibu/chat_konsul',$data_bidan); //Ngerubah variabel yang dikirim konten, karena id_bidan sering ketuker sama id_user
			// $this->load->view('ibu/template/footer');
		}
			
	}


  public function add()
	{
		$session = $this->session->userdata('id_user');
		$level =  $this->session->userdata('level');
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
			if ($level == "bidan") {
				$dataer=array(
					"id_pesan"=>$kode,
					"id_kirim"=>$this->session->userdata('id_user'),
					"pesan"=>$_POST['message'],
					"waktu"=>date('Y-m-d H:i:s'),
					"read_bidan"=>'Sudah',
				);	
			}
			else{
				$dataer=array(
					"id_pesan"=>$kode,
					"id_kirim"=>$this->session->userdata('id_user'),
					"pesan"=>$_POST['message'],
					"waktu"=>date('Y-m-d H:i:s'),
					"read_bidan"=>'Belum',
					"read_ibu"=>'Sudah',
				);
			}
			
			$this->db->insert('detail_percakapan',$dataer);
			//$this->session->unset_userdata('id_chat');
	  }else{

		  $this->db->select('*');
		$this->db->from('percakapan');
		$this->db->where(array('id_bidan'=> $session, 'id_ibu'=> $id));
		$query=$this->db->get()->result();
		 $arr=$query;
		if ($level == "bidan") {
			foreach($arr as $data):	
			$dataer=array(
					"id_pesan"=>$data->id_pesan,
					"id_kirim"=>$this->session->userdata('id_user'),
					"pesan"=>$_POST['message'],
					"waktu"=>date('Y-m-d H:i:s'),
					"read_bidan"=>'Sudah'
				);
				$this->db->insert('detail_percakapan',$dataer);
			endforeach;
		}
		else{
			foreach($arr as $data):	
			$dataer=array(
					"id_pesan"=>$data->id_pesan,
					"id_kirim"=>$this->session->userdata('id_user'),
					"pesan"=>$_POST['message'],
					"waktu"=>date('Y-m-d H:i:s'),
					// "read_bidan"=>'Sudah',
					"read_ibu"=>'Sudah'
				);
				$this->db->insert('detail_percakapan',$dataer);
			endforeach;
		}

	  }
		
			//$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
	}
	public function percakapan($id){
		$this->session->unset_userdata('id_userchat');
		$level =  $this->session->userdata('level');

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
		if ($level == "bidan") {
			foreach($arr as $data):	
				$dataer=array(
						"read_bidan"=>'Sudah',
					);
				 
				$this->db->where('id_pesan', $data->id_pesan);
				$this->db->update('detail_percakapan',$dataer);
			endforeach;
		}
		else{
			foreach($arr as $data):	
				$dataer=array(
						"read_ibu"=>'Sudah',
					);
				 
				$this->db->where('id_pesan', $data->id_pesan);
				$this->db->update('detail_percakapan',$dataer);
			endforeach;	
		}
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
		$this->db->join('bidan', 'percakapan.id_bidan = bidan.id_user'); //Ini harusnya bidan.id_bidan, tapi karna msh ttep jalan, yaudah ga perlu diganti
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
		if ($level == "bidan") {
			foreach($arr as $datae):	
				$dataer=array(
						"read_bidan"=>'Sudah',
					);
				 
				$this->db->where('id_pesan', $datae->id_pesan);
				$this->db->update('detail_percakapan',$dataer);
			endforeach;
		}
		else{
			foreach($arr as $datae):	
				$dataer=array(
						"read_ibu"=>'Sudah',
					);
				 
				$this->db->where('id_pesan', $datae->id_pesan);
				$this->db->update('detail_percakapan',$dataer);
			endforeach;	
		}
		
		$this->load->view('chat_konsul',$data);		
		//$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
	}
}