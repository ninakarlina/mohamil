<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_Tema extends CI_Model{	
	
		public $table = 'tema';
		public $id_tema = 'id_tema';	
		// public $tb = 'artikel';
		// public $id_detail_artikel = 'id_artikel';	
		 
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
			return $this->db->get('tema');
		}
		
		// menampilkan data mahasiswa yang akan di update
		function edit_data($where,$table){		
			return $this->db->get_where($table,$where);
		}
		function edit_artikel($where,$table){		
			return $this->db->get_where($table,$where);
		}
		
		// melakukan update data mahasiswa
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		
		// melakukan delete data mahasiswa
		function delete_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function insert_artikel($table, $data)
		{
			$this->db->insert($table, $data);
		}

		function tampil_artikel(){
			
			$this->db->select('*');
            $this->db->from('artikel');
            $this->db->join('tema','artikel.id_tema=tema.id_tema');
             $query = $this->db->get();
            return $query; 			
		}

		function delete_artikel($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}

	}

?>