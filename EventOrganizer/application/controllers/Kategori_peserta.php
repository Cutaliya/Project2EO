<?php
class Kategori_Peserta extends CI_Controller{
    public function index()
    {
        $this->load->model('kategori_peserta_model');
        $kategori_peserta = $this->kategori_peserta_model->getAll();
        $data['kategori_peserta'] = $kategori_peserta;
        $this->load->view('layouts/index');
        $this->load->view('kategori_peserta/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        //akses model kategori peserta
        $this->load->model('kategori_peserta_model');
        $kategori_peserta = $this->kategori_peserta_model->getById($id);
        $data['kategori_peserta'] = $kategori_peserta;
        $this->load->view('layouts/index');
        $this->load->view('kategori_peserta/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        //render view
        $this->load->view('layouts/index');
        $this->load->view('kategori_peserta/form');
        $this->load->view('layouts/footer'); 
    }
    public function save(){
        //akses model kategori peserta
        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
       
        $data_kategori_peserta['id'] = $_id;
        $data_kategori_peserta['nama'] = $_nama;
        

        if((!empty($_ide))){ //update
            $data_kategori_peserta['id'] = $_idedit;
            $this->kategori_peserta->update($data_kategori_peserta);
        }else{
            // data baru
            $this->kategori_peserta->simpan($data_kategori_peserta);
        }
        redirect('kategori_peserta','refresh');
    }
    public function edit($id){
        //akses model kategori peserta
        $this->load->model('kategori_peserta_model','kategori_peserta');
        $obj_kategori_peserta = $this->kategori_peserta->getById($id);
        $data['obj_kategori_peserta'] = $obj_kategori_peserta;
        $this->load->view('layouts/index');
        $this->load->view('kategori_peserta/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('kategori_peserta_model','kategori_peserta');
        //mengecek data kategori peserta berdasarkan id
        $data_kategori_peserta['id'] = $id;
        $this->kategori_peserta->delete($data_kategori_peserta);
        redirect('kategori_peserta','refresh');
    }
    // public function __construct(){
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }
    public function upload(){
        $_idkategori_peserta= $this->input->post("idkategori_peserta");
        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $kategori_peserta = $this->kategori_peserta->getById($_idkategori_peserta);
        $data['kategori_peserta']=$kategori_peserta;
        
        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $kategori_peserta->id;

        //menginisialisasi file upload
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
        }
        //kirim dan render ke detail
        $this->load->view('layouts/index');
        $this->load->view('kategori_peserta/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>