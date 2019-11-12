<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
      if ($this->form_validation->run() == false) {
        $this->load->view('landing/login');
      } else {
         //validasi sukses
         $this->_login();
      }
    }

    private function _login()
    {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $user = $this->db->get_where('user', ['username' => $username])->row_array();
       //jika user ada
       if ($user) {
          //jika user aktif
          if ($user['is_active'] == 1) {
             //cek password
             if (password_verify($password, $user['password'])) {
                //password benar
                $data = [
                   'username' => $user['username'],
                   'role_id' => $user['role_id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                   redirect('admin');
                } elseif ($user['role_id'] == 2) {
                   redirect('guru');
                } else {
                    redirect('siswa'); 
                }
             } else {
                //password tidak sama
                $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Wrong password!</div></div>');
                redirect('page/login');
             }
          } else {
             //tidak aktif
             $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Username has not ben activated!</div></div>');
             redirect('page/login');
          }
       } else {
          //tidak ada
          $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-danger">Username is not registered!</div></div>');
          redirect('page/login');
       }
    }
    public function logout()
    {
       $this->session->unset_userdata('username');
       $this->session->unset_userdata('role_id');
       $this->session->set_flashdata('message', '<div class="bs-component"><div class="alert alert-dismissible alert-success">You have been Logout!</div></div>');
       redirect('page/login');
    }


    public function opsi()
    {
        $this->load->view('landing/opsi');
    }

    public function registersiswa()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nomorhp', 'Nomorhp', 'required|trim|integer');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run()==false) {
            $this->load->view('landing/register-siswa');
        } else {
            $data = [
                'nama'=> htmlspecialchars($this->input->post('nama', true)),
                'username'=> htmlspecialchars($this->input->post('username', true)),
                'nomorhp'=> htmlspecialchars($this->input->post('nomorhp', true)),
                'email'=> htmlspecialchars($this->input->post('email', true)),
                'role_id'=>3,
                'is_active'=> 1,            
                'date_create'=> time(), 
                'password'=> password_hash($this->input->post('password1'),PASSWORD_DEFAULT)
            ];
            $this->db->insert('user', $data);
            redirect('page/login');
        }
    }

    public function registerguru()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nomorhp', 'Nomorhp', 'required|trim|integer');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run()==false) {
            $this->load->view('landing/register-guru');
        } else {
            $data = [
                'nama'=> htmlspecialchars($this->input->post('nama', true)),
                'username'=> htmlspecialchars($this->input->post('username', true)),
                'nomorhp'=> htmlspecialchars($this->input->post('nomorhp', true)),
                'email'=> htmlspecialchars($this->input->post('email', true)),
                'role_id'=>2,
                'is_active'=> 1,            
                'date_create'=> time(), 
                'password'=> password_hash($this->input->post('password1'),PASSWORD_DEFAULT)
            ];
            $this->db->insert('user', $data);
            redirect('page/login');
        }
    }
}