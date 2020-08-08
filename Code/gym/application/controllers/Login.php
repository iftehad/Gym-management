<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('LoginModel');
	}

	public function index()
	{
		$data['body_page']='login_page';
		$this->load->view('site', $data);
	}
	public function registration()
	{
		$data['body_page']='signup_page';
		$this->load->view('site',$data);
	}

	public function sign_up()
	{
		$data['area']=$this->LoginModel->get_area();
		// $data['areaTwo']=$this->LoginModel->get_disaster();
		$data['body_page']='signup_page';
		$this->load->view('site', $data);
	}

	public function save_member()
	{
		$this->LoginModel->save_member();

		redirect('Login');
	}	
	


	public function save_memberTwo()
	{
		$this->LoginModel->save_memberTwo();
        $data['body_page']='save_memberTwo';
		$this->load->view('site', $data);
	}



	public function authenticate()
	{
		$student_id = $this->LoginModel->verify_student();

		if($student_id)
		{
			$data = array(

				'is_logged_in'	=> true,

				'student_id'		=> $student_id

			);

			$this->session->set_userdata($data);

			redirect('Dashboard');

		}else{

			$data['error']='Sorry, Wrong Information!';
			$data['body_page']='login_page';
			$this->load->view('site', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('Home');
	}
}
