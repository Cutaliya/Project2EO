<?php
class users extends CI_Controller{
    // Membuat methode index
    public function index(){
    // akses model users
        $this->load->model('users_model');
        $users = $this->users_model->getAll();
        $data['users'] = $users; 
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/index');
        $this->load->view('users/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model users
        $this->load->model('users_model');
        $users = $this->users_model->getById($id);
        $data['users'] = $users;
        $this->load->view('layouts/index');
        $this->load->view('users/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/index');
        $this->load->view('users/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model users 
        $this->load->model('users_model', 'users');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');
 
        $data_users['username'] = $_username; // 2
        $data_users['password'] = $_password;
        $data_users['email'] = $_email;
        $data_users['created_at'] = $_created_at;
        $data_users['last_login'] = $_last_login;
        $data_users['status'] = $_status;
        $data_users['role'] = $_role;

        if((!empty($_idedit))){ // update
            $data_users['id'] = $_idedit;
            $this->users->update($data_users);
        }else{
            // data baru
            $this->users->simpan($data_users);
        }
        redirect('users', 'refresh');
    }
    public function edit($id){
        // akses model users
        $this->load->model('users_model', 'users');
        $obj_users = $this->users->getById($id);
        $data['obj_users'] = $obj_users;
        $this->load->view('layouts/index');
        $this->load->view('users/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('users_model', 'users');
        // Mengecek data dosen berdasarkan id
        $data_users['id'] = $id;
        $this->users->delete($data_users);
        redirect('users', 'refresh');

    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }
    public function upload(){
        $_idusers=$this->input->post("idusers");
        $this->load->model('users_model', 'users');
        $users = $this->users->getById($_idusers);
        $data['users']=$users;

        $config['upload_path'] = './upload/photos';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        // $config['file_name'] = $users->id;
        $_username = $this->input->post('username');

        $array = explode('.', $_FILES['foto_lukisan']['username']);
        $extension = end($array);
        $new_name = $_nama. ' f_1 ' .'.'.$extension;
        $config['file_name'] = $new_username;
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_lukisan'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } 
        else 
        {
            $data =  array('upload_data' => $this->upload->data());
            var_dump($this->kegiatan_model->simpan_foto(implode('_', explode('', $new_name)), 
            $this->input->post('id_kegiatan')));
        }
        return redirect('tampil/kegiatan');
        

        //kirim dan render ke detail
        // $this->load->view('layouts/index');
        // $this->load->view('users/detail', $data);
        // $this->load->view('layouts/footer');
        
    }
}
?>