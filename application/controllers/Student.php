<?php

class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = "Student List";
        $data['students'] = $this->Student_model->getAllStudent();
        $this->load->view('templates/header', $data);
        $this->load->view('student/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = "Add Student Data";
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('student/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Student_model->insertStudentData();
            $this->session->set_flashdata('message', 'New data created successfully');
            redirect('student');
        }
    }
}
