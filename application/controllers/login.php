<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('barangmodel');
    $this->load->model('user_model');
  }

  public function index()
  {
    $this->user_model->login();
    $this->load->view('login');
  }

  public function cek_login() 
  {
    $data = array('username'=> $this->input->post('username', TRUE),
          'pass' => $this->input->post('pass',TRUE)
        );
      $hasil = $this->barangmodel->cek_user($data);
      if ($hasil->num_rows() == 1) {
        foreach ($hasil->result() as $sess) {
          $log_data['logged_in'] = 'in';
          $log_data['id']        = $sess->id;
          $log_data['nama']      = $sess->username;
          $this->session->set_userdata($log_data);
      }

      redirect('dashboard');
    }
    else {
      echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
    }
  }

  public function logout()
  {
      session_destroy();
      redirect('Login');
  }


}
