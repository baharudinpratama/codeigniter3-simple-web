<?php

class Student_model extends CI_Model
{
    public function getAllStudent()
    {
        return $this->db->get('students')->result_array();
    }
}
