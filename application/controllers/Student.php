<?php

class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }
    public function index()
    {
        $data['title'] = "Student List";
        $data['students'] = $this->Student_model->getAllStudent();
        $this->load->view('templates/header', $data);
        $this->load->view('student/index', $data);
        $this->load->view('templates/footer');
    }
}
