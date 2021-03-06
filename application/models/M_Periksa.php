<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_Periksa extends CI_Model{	
	
		public $table = 'tb_periksa_ibu';
		public $id_ibu = 'id_periksa_ibu';	
	
		 
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
		function tampil_data($id){ 
			$user = $this->session->userdata('id_user');
			$this->db->select('*');
            $this->db->from('ibu_hamil');
            $this->db->join('tb_periksa_ibu','ibu_hamil.id_ibu=tb_periksa_ibu.id_ibu');
            $this->db->where('ibu_hamil.id_ibu',$id);
            $query = $this->db->get();
            return $query;
		}

		function tampil_bidan($id){ 
			$user = $this->session->userdata('id_user');
			$this->db->select('*');
            $this->db->from('tb_periksa_ibu');
            $this->db->join('bidan','tb_periksa_ibu.id_bidan=bidan.id_bidan');
            $this->db->where('tb_periksa_ibu.id_bidan',$id);
            $query = $this->db->get();
            return $query;
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