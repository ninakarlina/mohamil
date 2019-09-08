<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Forgot extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('M_forgot');
		$this->load->library('session');
		$this->load->helper('url');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->helper(array('email'));
    $this->load->library(array('email'));
	}
	
	public function index() {
		$this->load->view('forgot');
	} 	

  public function kirim_email() {
    $data['title'] = 'Lupa Password';
    $data = $this->M_forgot->read_email($this->input->post('email'));
    // print_r($data[0]['id_user']);
    // $data[0]['id_user'] = $this->M_forgot->read_email("coba");
    // $data[0]['email'] = "maulana27051998@gmail.com";
    // $email = $data[0]['id_user'];

    if (count($data)==1) {
          //Load email library
          $this->load->library('email');
          //SMTP & mail configuration

          $config = array(
          'protocol'  => 'smtp',
          'smtp_host' => 'smtp.gmail.com',
          'smtp_crypto'=> 'ssl',
          'smtp_port' => 465,
          'smtp_user' => 'karlina5427@gmail.com',
          'smtp_pass' => 'tersenyum',
          'mailtype'  => 'html',
          'charset'   => 'utf-8'
          );
          
          $this->email->initialize($config);
          $this->email->set_mailtype("html");
          $this->email->set_newline("\r\n");
          //Email content
          $base_url = base_url('C_forgot/reset_password/').$data[0]['id_user'];
          $htmlContent = "
              <html>
                <body>
                  <link href='https://fonts.googleapis.com/css?family=Abel|Roboto' rel='stylesheet'>
                  <div style='background-color: #f1f1f1; padding:20px; font-family: Roboto, sans-serif; font-color:black'>
                    <div style='background-color: #7FFF00; padding-bottom: 5px'></div>
                    <div style='background-color: #ffffff; padding: 10px; text-align: center; text-color:black'>
                      <h1>Admin</h1>
                      <h3>Silahkan Masuk pada halaman ini untuk mengubah Password Anda!</h3>
                      <div style='text-align: center'>
                        <a href='$base_url' style='background-color: #7FFF00; border: none; color: white; padding: 16px 32px; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; -webkit-transition-duration: 0.4s; transition-duration: 0.4s; cursor: pointer'><b>Reset Password</b></a>
                      </div>
                      <p>Email ini dikirimkan secara otomatis. Mohon tidak membalas ke email ini.</p>
                    </div>
                    <div style='background-color: #7FFF00; padding-bottom: 5px'></div>
                  </div>
                </body>
              </html>
          ";
          $this->email->to($data[0]['email']);
          $this->email->from('karlina5427@gmail.com','karlina5427@gmail.com | ADMIN');
          $this->email->subject('Reset Password ADMIN');
          $this->email->message($htmlContent);
          //Send email
          $this->email->send();

          // print_r($this->email->message($htmlContent));

          $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>Berhasil kirim tautan!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button></div>");
          // echo $data[0]['id_user'];
          // echo $data[0]['email'];
          // print_r($base_url);
          // echo "Msduk if";
        } else {
          $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>Email tidak terdaftar!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button></div>");
          // echo "gsk msuk if";
        }
          redirect('C_forgot');
    }

    public function reset_password($id_user){
      $data['title'] = 'Reset Password';
      $data['id_user'] = $id_user;
      $this->load->view('reset_password', $data);
    }


    public function do_reset_password($id_user){
      if(strlen($this->input->post('password_konfirmasi'))<8){
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>Password minimal 8 character salah!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button></div>");
        redirect('C_forgot/reset_password/'.$id_user);
      } elseif ($this->input->post('password_baru')!=$this->input->post('password_konfirmasi')) {
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>Password konfirmasi salah!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button></div>");
        redirect('C_forgot/reset_password/'.$id_user);
      } else {
        $data = array(
            'password' => $this->input->post("password_konfirmasi")
        );
        $this->M_forgot->reset($data,$id_user);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>Password berhasil di reset! silahkan login dengan password baru.<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button></div>");
      }
      redirect('C_login');
    }
}