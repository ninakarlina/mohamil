<?php
class M_Login extends CI_Model {

     function validate_login($postData){
      $this->db->select('*');
      $this->db->or_where('username', $postData['username']);
      $this->db->from('user');
      $query=$this->db->get();
      if ($query->num_rows() == 0)
          $user = 0;
      else
          $user = 1;
      

      $this->db->select('*');
      $this->db->where('password', $postData['password']);
      $this->db->from('user');
      $query=$this->db->get();
      if ($query->num_rows() == 0)
          $pass = 0;
      else
          $pass = 1;
      
      if ($user == 0 && $pass == 0)
        return false;
      else if ($user == 0)
          return "username";
      else if ($pass == 0)
          return "pass";
      else
          return $query->result();
      }

     public function get_data_login($username,$password) {
      $query = $this->db->select("*")
      ->from('user')
      ->where('username',$username)
      ->where('password',$password)
      ->get();
      return $query->result();
     }
}

