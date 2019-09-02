<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_Kes_ibu extends CI_Model{	
	
		public $table = 'catatan_kes_ibu';
		public $id_kes_ibu = 'id_kes_ibu';	
	
		 
		function __construct()
		{
			parent::__construct();
		}
		
		// melakukan insert data 
		function insert($data)
		{
			$this->db->insert($this->table, $data);
		}
		
		// menampilkan data 
		function tampil_data(){ 
			return $this->db->get('catatan_kes_ibu');
		}
		
		// menampilkan data yang akan di update
		function edit_data($where,$table){		
			return $this->db->get_where($table,$where);
		}
		
		// melakukan update data
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		
		// melakukan delete data
		function delete_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}

?>