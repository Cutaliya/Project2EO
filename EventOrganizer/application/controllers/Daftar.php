<?php
class Daftar extends CI_Controller{
    // membuat method index
    public function index(){
    // akses model daftar 
    $this->load->model('daftar_model');
    $daftar = $this->daftar_model->getAll();
    $data['daftar'] = $daftar;
    // render data dan kirim data ke dalam view
    $this->load->view('layouts/index');
    $this->load->view('daftar/index', $data);
    $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model daftar
        $this->load->model('daftar_model');
        $daftar = $this->daftar_model->getById($id);
        $data['daftar'] = $daftar;
        $this->load->view('layouts/index');
        $this->load->view('daftar/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/index');
        $this->load->view('daftar/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model daftar
        $this->load->model('daftar_model', 'daftar'); // 1
        $_tanggal_daftar = $this->input->post('tanggal_daftar');
        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');

        $data_daftar['tanggal_daftar'] = $_tanggal_daftar; // 2
        $data_daftar['alasan'] = $_alasan;
        $data_daftar['users_id'] = $_users_id;
        $data_daftar['kegiatan_id'] = $_kegiatan_id;
        $data_daftar['kategori_peserta_id'] = $_kategori_peserta_id;
        $data_daftar['nosertifikat'] = $_nosertifikat;

        if((!empty($_idedit))){ //update
            $data_daftar['id'] = $_idedit;
            $this->daftar->update($data_daftar);
        }else{
            //  data baru
            $this->daftar->simpan($data_daftar);
        }
        redirect('daftar','refresh');
    }
    public function edit($id){
        // akses model daftar
        $this->load->model('daftar_model','daftar');
        $obj_daftar = $this->daftar->getById($id);
        $data['obj_daftar'] = $obj_daftar;
        $this->load->view('layouts/index');
        $this->load->view('daftar/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('daftar_model','daftar');
        // Mengecek data daftar berdasarkan id
        $data_daftar['id'] = $id;
        $this->daftar->delete($data_daftar);
        redirect('daftar','refresh');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }
    public function upload(){
        $_iddaftar=$this->input->post("iddaftar");
        $this->load->model('daftar_model','daftar');
        $daftar =$this->daftar->getById($_iddaftar);
        $data['daftar']=$daftar;

        $config['upload_path'] = './upload/photosDaftar';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $daftar->id;

        // menginisialisasi file upload
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
        }
        // kirim dan render ke detail
        $this->load->view('layouts/index');
        $this->load->view('daftar/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>