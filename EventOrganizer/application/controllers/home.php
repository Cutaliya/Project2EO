<?php
class Home extends CI_Controller{
    public function index(){
        // merender methid atau property yang ada di dalam object views
        $this->load->view('home/index.php');
        
    }
}
?>