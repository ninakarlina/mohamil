<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	 
	class M_Bidan extends CI_Model{		
		 
		function __construct()
		{
			parent::__construct();
		}
		
		// melakukan insert data 
		function insert($data, $table)
		{
			$this->db->insert($table, $data);
		}
		
		// menampilkan data mahasiswa
		function tampil_bidan(){ 
			return $this->db->get('bidan');
		}
		
		// menampilkan data mahasiswa yang akan di update
		function edit_bidan($where,$table){		
			return $this->db->get_where($table,$where);
		}
		
		// melakukan update data mahasiswa
		function update_bidan($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table, $data);
			$this->db->trans_complete();
			print_r($this->db->trans_status());
			print_r($this->db->last_query());
		}
		
		// melakukan delete data mahasiswa
		function delete_bidan($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
		function tampil_user(){
			
			$this->db->select('*');
            $this->db->from('user');
            $this->db->join('bidan','user.id_user=bidan.id_user');
             $query = $this->db->get();
            return $query; 			
		}

		function tampil_edit_bidan ($id) {
			$data = $this->db->query("SELECT * FROM bidan bidan, user user WHERE bidan.id_user=user.id_user AND bidan.id_bidan = '$id' order by id_bidan DESC");
			return $data->result();
		}
 
	}

?>