<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fasilitas extends CI_Controller {
Public function index(){
    $this->load->view('layouts/index');
    $this->load->view('layouts/footer');
}
}
?>