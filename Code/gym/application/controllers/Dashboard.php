<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {



	function __construct()
	{
		parent::__construct();
		                 $this->load->helper('url','form');

                $this->load->model('infoModel');


		$this->load->model('LoginModel');

		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!$is_logged_in)
			redirect('Login');
	}

	public function index()
	{
		$this->load->view('profile_page');
	}
  
   public function dashboard_page()
   {
     $this->load->view('dashboard_page');
   }

	public function profile()
	{
		$data['area']=$this->LoginModel->get_area();
		// $data['info']=$this->LoginModel->get_member_info();
		$this->load->view('profile_page', $data);
		
	}

	public function update_profile($id)
	{
		$this->LoginModel->update();
		redirect('Dashboard/profile');
	}




 

}