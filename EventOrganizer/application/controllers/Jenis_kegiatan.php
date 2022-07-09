<?php
class Jenis_kegiatan extends CI_Controller{
    public function index()
    {
        $this->load->model('jenis_kegiatan_model');
        $jenis_kegiatan = $this->jenis_kegiatan_model->getAll();
        $data['jenis_kegiatan'] = $jenis_kegiatan;
        $this->load->view('layouts/index');
        $this->load->view('jenis_kegiatan/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        //akses model jns kgiatan
        $this->load->model('jenis_kegiatan_model');
        $jenis_kegiatan = $this->jenis_kegiatan_model->getById($id);
        $data['jenis_kegiatan'] = $jenis_kegiatan;
        $this->load->view('layouts/index');
        $this->load->view('jenis_kegiatan/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        //render view
        $this->load->view('layouts/index');
        $this->load->view('jenis_kegiatan/form');
        $this->load->view('layouts/footer'); 
    }
    public function save(){
        //akses model mahasiswa
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $_seminar = $this->input->post('seminar');
        $_workshop = $this->input->post('workshop');
        $_event_olah_raga = $this->input->post('event_olah_raga');
        $_bazaar = $this->input->post('bazaar');
        $_pelatihan = $this->input->post('pelatihan');
       
        $data_jenis_kegiatan['seminar'] = $_seminar;
        $data_jenis_kegiatan['workshop'] = $_workshop;
        $data_jenis_kegiatan['event_olah_raga'] = $_event_olah_raga;
        $data_jenis_kegiatan['bazaar'] = $_bazaar;
        $data_jenis_kegiatan['pelatihan'] = $_pelatihan;
        

        if((!empty($_ide))){ //update
            $data_jenis_kegiatan['id'] = $_idedit;
            $this->jenis_kegiatan->update($data_jenis_kegiatan);
        }else{
            // data baru
            $this->jenis_kegiatan->simpan($data_jenis_kegiatan);
        }
        redirect('jenis_kegiatan','refresh');
    }
    public function edit($id){
        //akses model mahasiswa
        $this->load->model('jenis_kegiatan_model','jenis_kegiatan');
        $obj_jenis_kegiatan = $this->jenis_kegiatan->getById($id);
        $data['obj_jenis_kegiatan'] = $obj_jenis_kegiatan;
        $this->load->view('layouts/index');
        $this->load->view('jenis_kegiatan/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('jenis_kegiatan_model','jenis_kegiatan');
        //mengecek data mahasiswa berdasarkan id
        $data_jenis_kegiatan['id'] = $id;
        $this->jenis_kegiatan->delete($data_jenis_kegiatan);
        redirect('jenis_kegiatan','refresh');
    }
    // public function __construct(){
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }
    public function upload(){
        $_idjenis_kegiatan = $this->input->post("idjenis_kegiatan");
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $jenis_kegiatan = $this->jenis_kegiatan->getById($_idjenis_kegiatan);
        $data['jenis_kegiatan']=$jenis_kegiatan;
        
        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $jenis_kegiatan->id;

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
        $this->load->view('jenis_kegiatan/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>