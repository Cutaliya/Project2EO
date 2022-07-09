<?php
class Kegiatan extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model kegiatan
        $this->load->model('kegiatan_model');
        $kegiatan = $this->kegiatan_model->getAll();
        $data['kegiatan'] = $kegiatan;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/index');
        $this->load->view('kegiatan/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model kegiatan
        $this->load->model('kegiatan_model');
        $kgtn = $this->kegiatan_model->getById($id);
        $data['kgtn'] = $kgtn;
        $this->load->view('layouts/index');
        $this->load->view('kegiatan/detail', $data);
        $this->load->view('layouts/footer');
    } 
    public function form() {
        
        // kirim ke view
        $this->load->view('layouts/index');
        $this->load->view('kegiatan/form');
        $this->load->view('layouts/footer');
}
    public function save(){
        // akses ke model kegiatan
        $this->load->model('kegiatan_model', 'kegiatan'); // 1
        $_id = $this->input->post('id');
        $_judul = $this->input->post('judul');
        $_kapasitas = $this->input->post('kapasitas');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_tanggal = $this->input->post('tanggal');
        $_tema = $this->input->post('tema');
        $_tempat = $this->input->post('tempat');
        $_pic = $this->input->post('pic');
        $_foto_lukisan = $this->input->post('foto_lukisan');
        $_jenis_id = $this->input->post('jenis_id');

        $data_kgtn['id'] = $_id; // 2
        $data_kgtn['judul'] = $_judul; 
        $data_kgtn['kapasitas'] = $_kapasitas; 
        $data_kgtn['harga_tiket'] = $_harga_tiket; 
        $data_kgtn['tanggal'] = $_tanggal; 
        $data_kgtn['tema'] = $_tema; 
        $data_kgtn['tempat'] = $_tempat; 
        $data_kgtn['pic'] = $_pic; 
        $data_kgtn['foto_lukisan'] = $_foto_lukisan; 
        $data_kgtn['jenis_id'] = $jenis_id; 

        if((!empty($_idedit))){ // update
            $data_kegiatan['id'] = $_idedit;
            $this->kegiatan->update($data_kegiatan);
        }else{
            // data baru 
            $this->kegiatan->simpan($data_kegiatan);
        }
        redirect('kegiatan','refresh');
    }
    public function edit($id){
        // akses model kegiatan
        $this->load->model('kegiatan_model','kegiatan');
        $obj_kegiatan =  $this->kegiatan->getById($id);
        $data['obj_kegiatan'] = $obj_kegiatan;
        $this->load->view('layouts/index');
        $this->load->view('kegiatan/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('kegiatan_model','kegiatan');
        // Mengecek data kegiatan berdasarkan id
        $data_kegiatan['id'] = $id;
        $this->kegiatan->delete($data_kegiatan);
        redirect('kegiatan','refresh');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }
    public function upload(){
        $_idkegiatan=$this->input->post("idkegiatan");
        $this->load->model('kegiatan_model','kegiatan');
        $kgtn =$this->kegiatan->getById($_idkegiatan);
        $data['kgtn']=$kgtn;

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $kgtn->id;
        $_idkegiatan=$this->input->post("id");
        $array = explode('.', $_FILES['fotolks']['name']);
        $extension = end($array);
    
        $new_name = $_idkegiatan.'.'.$extension;
    
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);
    

        // menginisialisasi file upload
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $this->load->model('kegiatan_model', 'kegiatan');
        $array_data[] = $new_name;
        $array_data[] = $_idkegiatan;
        $this->kegiatan->update_foto($array_data);
        $data = array('upload_data' => $this->upload->data());
        $data['error']='data sukses';
            // $data['error'] = 'data sukses';
            // $data['upload_data'] = $this->upload->data();
        }
        redirect('kegiatan/detail','refresh');
        // kirim dan render ke detail
        // $this->load->view('layouts/index');
        // $this->load->view('kegiatan/detail', $data);
        // $this->load->view('layouts/footer');
        // $config['file_name'] = $kegiatan->id;
        
        // $_tema = $this->input->post('tema');

        // $array = explode('.', $_FILES['fotolks']['name']);
        // $extension = end($array);
        // $new_name = $_tema. ' f_1 ' .'.'.$extension;
        // $config['file_name'] = $new_name;
        
        // $this->load->library('upload', $config);

        // if (!$this->upload->do_upload('fotolks'))
        // {
        //     $error = array('error' => $this->upload->display_errors());

        //     $this->load->view('upload_form', $error);
        // } 
        // else 
        // {
        //     $data =  array('upload_data' => $this->upload->data());
        //     // var_dump($this->kegiatan_model->simpan_foto(implode('_', explode('', $new_name)), 
        //     $this->input->post('id_kegiatan');
        // }
        // return redirect('kegiatan/detail');
    }
}
?>