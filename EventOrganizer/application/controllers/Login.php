<?php
class Login extends CI_Controller {
    public function index(){
        $data = [];
        $this->load->view('login/index');
    }
    public function otentikasi(){
        $this->load->model("users_model", "users");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->users->login($_username,$_password);
        if(isset($row)){// jika user terdaftar di database 
            redirect(base_url().'index.php/users');
        }else{// jika user tidak (username password salah)
            redirect(base_url().'index.php/login?status=f');

        }
    }
        public function logout(){
            $this->session->unset_userdata('USERNAME');
            $this->session->unset_userdata('ROLE');
            $this->session->unset_userdata('USERS');
            redirect(base_url() . 'index.php/home');
        }
    }
?>