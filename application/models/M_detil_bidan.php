    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

     
    class M_detil_bidan extends CI_Model{
     
      public function __construct()
      {
        parent::__construct();
      }
     
      public function tambah_data($c_user,$c_detil_bidan){
        $this->db->trans_start();
          $id = $this->tambah_akun($c_user);
          $c_detil_bidan['id_user'] = $id;
          $this->tambah_user($c_detil_bidan);
        $this->db->trans_complete();
     
        return $this->db->trans_status();
      }
     
      public function tambah_akun($data){
        $this->db->insert('user', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
      }
     
      public function tambah_user($data){
        $res = $this->db->insert('bidan', $data);
        return $res;
      }

    }