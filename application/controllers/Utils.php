<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Utils extends CI_Controller {

    public function index(){
        $this->load->library('migration');
        if($this->migration->current()){
            echo "<script>alert('Executado com sucesso');</script>";
        }
        else{
            show_error($this->migration->error_string());
        }
    }

}
