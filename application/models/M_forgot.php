<?php
class M_forgot extends CI_Model {

	public function read_email($email)
	{
		$query = $this->db->select('*')
		->from ('user')
		->where('email',$email)
		->get();
		return $query->result_array();
	}

	public function reset($data,$id)
	{
		$this->db->where('id_user',$id)
				 ->update('user',$data);
				   return TRUE;
	}
}
?>