
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class infoModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }


      public function getInstructor()
        {
                return $this->db->select('*')
                                ->from('instructor')
                                ->order_by("ID", "asc")
                              
                               
                                
                                ->get()->result_array();
        }


    public function delete_member($id)
        {
                $this->db->where('id', $id);
                        if($this->db->delete('instructor'))
                                return TRUE;
                        else 
                                return FALSE;
        }


   }
