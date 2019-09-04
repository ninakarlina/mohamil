<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_Ibu extends CI_Model{	
	
		 
		function __construct()
		{
			parent::__construct();
		}
		
		// melakukan insert data 
		function insert($data, $table)
		{
			$this->db->insert($table, $data);
		}
		
		// menampilkan data 
		function tampil_ibu(){ 
			return $this->db->get('ibu_hamil');
			
		}
		
		// menampilkan data yang akan di update
		function edit_ibu($id){
			$where = array('id_ibu' => $id);
			$this->db->select('*');
            $this->db->from('ibu_hamil');
            $this->db->join('user','ibu_hamil.id_user=user.id_user');
			$this->db->order_by('user.id_user','DESC');
			$this->db->where($id);
			$ubah=$this->db->get()->result();
 			return $ubah;
		}
		
		function edit_ibu2($id){
			$where = array('id_ibu' => $id);
			$this->db->select('*');
            $this->db->from('catatan_kes_ibu');
			$this->db->where($id);
			$ubah=$this->db->get()->result();
 			return $ubah;
		}
		
		// melakukan update data
		function update_ibu($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		
		// melakukan delete data
		function delete_ibu($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		// $this->db->select('id_ibu');
		// $this->db->from('table2');
		// $this->db->where('table2.title', $title);
		// $where_clause = $this->db->get_compiled_select();

		// #Create main query
		// $this->db->where('table1.user_id', $user_id); 
		// $this->db->where("`id` NOT IN ($where_clause)", NULL, FALSE);
		// $this->db->delete('table1');

	  public function search($keyword){
    $this->db->like('kode_ibu', $keyword)->or_like('nama_ibu', $keyword); //mencari data yang serupa dengan keyword
    return $this->db->get('ibu_hamil')->result();
  }


		function tampil_kesehatan(){
			
			$this->db->select('*');
            $this->db->from('catatan_kes_ibu');
            $this->db->join('ibu_hamil','catatan_kes_ibu.id_ibu=ibu_hamil.id_ibu');
             $query = $this->db->get();
            return $query; 			
		}

		function tampil_user(){
			
			$this->db->select('*');
            $this->db->from('user');
            $this->db->join('ibu_hamil','user.id_user=ibu_hamil.id_user');
            $this->db->order_by('user.id_user','DESC');
             $query = $this->db->get();
            return $query; 			
		}

		function tampil_ibu_hamil($id){
			
			$this->db->select('*');
            $this->db->from('user');
            $this->db->join('ibu_hamil','user.id_user=ibu_hamil.id_user');
            $this->db->where('user.id_user', $id);
            // $this->db->order_by('user.id_user','DESC');
            $query = $this->db->get();
            return $query; 			
		}

		function tampil_periksa($id){
			if ($id=="Admin"){
			$this->db->select('*');
            $this->db->from('ibu_hamil');
            $this->db->join('tb_periksa_ibu','ibu_hamil.id_ibu=tb_periksa_ibu.id_ibu');
            $this->db->join('bidan','tb_periksa_ibu.id_bidan=bidan.id_bidan');
             $query = $this->db->get();
            return $query;
			}else if($id=="bidan"){
			$user = $this->session->userdata('id_user');
			$where = array('tb_periksa_ibu.id_bidan' => $user);
			$this->db->select('*');
            $this->db->from('ibu_hamil');
            $this->db->join('tb_periksa_ibu','ibu_hamil.id_ibu=tb_periksa_ibu.id_ibu');
            $this->db->join('bidan','tb_periksa_ibu.id_bidan=bidan.id_bidan');
			$this->db->where('tb_periksa_ibu.id_bidan',$user);
             $query = $this->db->get();
            return $query;
			}else{
			$user = $this->session->userdata('id_user');
			$this->db->select('*');
            $this->db->from('user');
            $this->db->join('ibu_hamil','ibu_hamil.id_ibu=user.id_user');
            $this->db->join('tb_periksa_ibu','ibu_hamil.id_ibu=tb_periksa_ibu.id_ibu');
			$this->db->where('user.id_user',$user);
             $query = $this->db->get();
            return $query;
			}			
		}
		

		public function buat_kode()   {
		  $this->db->select('RIGHT(ibu_hamil.kode_ibu,2) as kode', FALSE);
		  $this->db->order_by('kode_ibu','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('ibu_hamil');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kode_ibu = "PB".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kode_ibu;  
	}

		public function hitungJumlahIbu(){   

	    $query = $this->db->get('ibu_hamil');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahBidan(){   

	    $query = $this->db->get('bidan');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahTema(){   

	    $query = $this->db->get('tema');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahArtikel(){   

	    $query = $this->db->get('artikel');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
	  
}

?>
