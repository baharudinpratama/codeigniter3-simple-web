<?php

class Student_model extends CI_Model
{
    public function getAllStudent()
    {
        return $this->db->get('students')->result_array();
    }

    public function insertStudentData()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "major" => $this->input->post('major', true),
        ];
        $this->db->insert('students', $data);
    }
}
