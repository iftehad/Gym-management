<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_area()
    {
    	return $this->db->select('*')
    					->from('student')
    					->get()->result_array();
    }

        public function get_disaster()
    {
        return $this->db->select('*')
                        ->from('disaster')
                        ->get()->result_array();
    }

    public function save_member()
    {
        $data = array(

            'email' => $this->input->post('email'),

            'password'    => $this->input->post('password'),

            'STUDENT_NAME' => $this->input->post('STUDENT_NAME'),

            'instructor_name' => $this->input->post('instructor_name'),

            'gender'    => $this->input->post('gender'),

            'ADDRESS'  => $this->input->post('ADDRESS'),

            'ADMISSION_DATE' => $this->input->post('ADMISSION_DATE'),



        );

        $this->db->insert('student', $data);
    }    


    public function save_memberTwo()
    {
        $data = array(

            'postal_code' => $this->input->post('postal_code'),

            'village'    => $this->input->post('village'),

            'thana' => $this->input->post('thana'),

            'district'  => $this->input->post('district'),

        );

        $this->db->insert('region', $data);
    }

    public function verify_student()
    {
    	$email = $this->input->post('email');
    	$password = $this->input->post('password');

    	$data = $this->db->select('student_id')
    					->from('student')
    					->where('email', $email)
    					->where('password', $password)
    					->get()->row_array();

    	return $data['student_id'];

    }

    public function get_member_info()
    {
    	$member_id = $this->session->userdata('member_id');

    	return $this->db->select('*')
    					->from('members')
    					->where('member_id', $member_id)
    					->get()->row_array();
    }

    public function update($id)
    {
    	$id = $this->session->userdata('id');

    	$data = array(

    		'email'	=> $this->input->post('email'),

    		'STUDENT_NAME'	=> $this->input->post('STUDENT_NAME'),

    		

    		'gender'	=> $this->input->post('gender'),

    		'ADDRESS'	=> $this->input->post('ADDRESS'),



    	);

    	$this->db->where('id', $id)
    			->update('student', $data);
    }
}