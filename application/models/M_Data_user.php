<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_Data_user extends CI_Model{	
	
		public $table = 'user';
		public $id_user = 'id_user';	
	
		 
		function __construct()
		{
			parent::__construct();	
		}
		
		// melakukan insert data 
		function insert($data)
		{
			$this->db->insert($this->table, $data);
		}
		
		// menampilkan data mahasiswa
		function tampil_data(){ 
			return $this->db->get('user');
		}
		
		// menampilkan data mahasiswa yang akan di update
		function edit_data($where,$table){		
			return $this->db->get_where($table,$where);
		}
		
		// melakukan update data mahasiswa
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function tampil_user(){
			
			$this->db->select('*');
            $this->db->from('bidan');
            $this->db->join('user','bidan.id_user=user.id_user');
             $query = $this->db->get();
            return $query; 			
		}

		function tampil_userr(){
			
			$this->db->select('*');
            $this->db->from('user');
            $this->db->join('bidan','user.id_user=bidan.id_user');
             $query = $this->db->get();
            return $query; 			
		}
		
		// melakukan delete data mahasiswa
		function delete_bidan($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}

?>