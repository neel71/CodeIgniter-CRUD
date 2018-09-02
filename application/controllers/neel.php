<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class neel extends CI_Controller {

    public function index() {

        $this->load->view('login');
    }

    public function dashboard() {
        $data = array();
        $data['main_content'] = $this->load->view('pages/main_content', '', true);
        $this->load->view('dashboard/dashboard', $data);
    }

    public function login_form() {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $this->load->model('admin_login');
        $result = $this->admin_login->admin_info($email, $password);
        $data = array();
        if ($result) {
            $data['id'] = $result->id;
            $data['name'] = 'Neel';
            $this->session->set_userdata($data);
            redirect('admin-panel');
//        $data = array();
//        $data['main_content'] = $this->load->view('dashboard/add_student', '', true);
//        $this->load->view('dashboard/dashboard', $data);
        } else {
            $data['message'] = 'Username or Password is invalid!!!';
            $this->session->set_userdata($data);
            redirect(base_url());
        }
    }

    public function logout() {
        $this->session->unset_userdata($data);
        $data['logout'] = 'User logout successfully';
        $this->session->set_userdata($data);
        redirect(base_url());
    }

    public function add_student() {
        $data = array();
        $data['main_content'] = $this->load->view('dashboard/add_student', '', true);
        $this->load->view('dashboard/dashboard', $data);
    }

    public function manage_student() {

        $data = array();
        $data['main_content'] = $this->load->view('dashboard/manage_student', '', true);
        $this->load->view('dashboard/dashboard', $data);
    }

   

    public function student_add() {
        $name = $this->input->post('name', true);
        $roll = $this->input->post('roll', true);
        $phone = $this->input->post('phone', true);

        $this->load->model('student_model');
        $query = $this->student_model->add_student($name, $roll, $phone);
    }

    public function student_edit($id) {
        $data = array();
        $data['value'] = $this->student_model->student_info_by_id($id);
        //$data['main_content'] = $this->load->view('dashboard/edit_student', '', true);
        $this->load->view('dashboard/edit_student', $data);
    }

    public function student_update() {
        $name = $this->input->post('name', true);
        $roll = $this->input->post('roll', true);
        $phone = $this->input->post('phone', true);
        $id = $this->input->post('id', true);

        $this->load->model('student_model');
        $query = $this->student_model->update_student($name, $roll, $phone, $id);
    }

    public function student_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('student');
        $data=array();
        $data['success'] = 'Student  info Deleted';
        $this->session->set_userdata($data);
        redirect('manage-student');
    }
    
     public function add_admin() {
        $data = array();
        $data['main_content'] = $this->load->view('pages/edit_admin', '', true);
        $this->load->view('dashboard/dashboard', $data);
    }
     public function admin_save() {
         $this->load->model('admin_login');
         $this->admin_login->add_admin_info();
         
        $data=array();
        $data['success'] = 'Admin  info Added';
        $this->session->set_userdata($data);
        redirect('add-admin');
    }

}
