<?php

class Student extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Student List";
        $this->load->view('templates/header', $data);
        $this->load->view('student/index');
        $this->load->view('templates/footer');
    }
}
