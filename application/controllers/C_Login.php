 <?php
class C_Login extends CI_Controller{
    public function __construct(){
        parent ::__construct();
        $this->load->model('M_Login');
        $this->load->library('session');
    }

    public function index()
    {
        if($this->session->userdata('logged_in')) {
            redirect(base_url("C_User"));
        }else {
            $data = array('alert' => false);
            $this->load->view('login',$data);
        }
    }

     public function proses_login(){
        $postData = $this->input->post();
        $validate = $this->M_Login->validate_login($postData);
        if ($validate == "username"){
            $this->session->set_flashdata('gagal', ' username anda salah');
        }
        else if ($validate == "pass"){
            $this->session->set_flashdata('gagal', ' password anda salah');
        }
        else if ($validate){
            $newdata = array(
              'username'  => $validate[0]->username,
              'level'     => $validate[0]->level,
              'id_user'  => $validate[0]->id_user,
              'logged_in' => TRUE,
            );
            $this->session->set_userdata($newdata);
            if ($validate[0]->level=="admin") {
                redirect(base_url("C_User")); 
            } elseif ($validate[0]->level=="bidan") {
                redirect(base_url("C_User")); 
            } elseif ($validate[0]->level=="ibu") {
                redirect(base_url("C_Ibu")); 
            } 
        }
        else{
            $this->session->set_flashdata('gagal', ' username dan password salah');
        }
        $data = array('alert' => true);
        $this->load->view('login',$data);
    }


    public function logout(){
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('C_Login');
    }
}