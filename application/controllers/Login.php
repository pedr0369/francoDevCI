<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}
	
	public function index()
	{
		logado();
        $this->load->view('login');
	}
	
	public function loga()
	{
		$email = $this->input->post('email');
		$senha = md5($this->input->post('password'));
		$login = $this->Login_model->login($email, $senha);
		$this->session->set_userdata("usuario", $login);
		redirect('Login/index');
	}
	
}
