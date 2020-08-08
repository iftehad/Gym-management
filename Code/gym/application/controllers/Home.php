<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		                 $this->load->helper('url','form');

                $this->load->model('infoModel');

	}


	public function index()
	{
		$data['body_page']='home_page';
		$this->load->view('site', $data);
	}	

	public function machine()
	{
		$data['body_page']='machine';
		$this->load->view('site', $data);
	}	

	public function locker()
	{
		$data['body_page']='locker';
		$this->load->view('site', $data);
	}
	public function help()
	{
		$data['body_page']='helplist';
		$this->load->view('site', $data);
	}

	public function instructor_list()

  {

    $data['instructor']=$this->infoModel->getInstructor();
   $data['body_page']='members';
    $this->load->view('site', $data); 
  
  }
  public function delete($id)
	{
		$delete_ok=$this->infoModel->delete_member($id);

		if($delete_ok)
		{
			$this->data['body_page']='Home';
			$this->load->view('site', $this->data);
		}
		else
		{
			$this->data['body_page']='Home';
			$this->load->view('site', $this->data);
		}
	}
  

  }
