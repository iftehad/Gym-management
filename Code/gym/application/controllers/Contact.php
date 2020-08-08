<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['body_page']='contact_page';
		$this->load->view('site', $data);
	}
}
