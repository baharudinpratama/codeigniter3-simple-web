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

    public function delete($id)
    {
        $this->Student_model->deleteStudentData($id);
        $this->session->set_flashdata('message', 'Data deleted successfully');
        redirect('student');
    }

    public function detail($id)
    {
        $data['title'] = "Student Detail";
        $data['student'] = $this->Student_model->getStudentById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('student/detail', $data);
        $this->load->view('templates/footer');
    }
}
