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

    public function updateStudentData()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "major" => $this->input->post('major', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('students', $data);
    }

    public function deleteStudentData($id)
    {
        $this->db->delete('students', ['id' => $id]);
    }

    public function getStudentById($id)
    {
        return $this->db->get_where('students', ['id' => $id])->row_array();
    }
}
