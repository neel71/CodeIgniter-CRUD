<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class student_model extends CI_Model {

    public function add_student($name, $roll, $phone) {
        $data = array(
            'name' => $name,
            'roll' => $roll,
            'phone' => $phone
        );

        $this->db->insert('student', $data);
        $message = array();
        $message['success'] = 'Student Info Added Successfully';
        $this->session->set_userdata($message);
        redirect('add-student');
    }

    public function student_info_by_id($id) {

        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('id', $id);
        $result = $this->db->get();
        $value = $result->row();
        return $value;
    }

    public function update_student($name, $roll, $phone, $id) {

        $data = array(
            'name' => $name,
            'roll' => $roll,
            'phone' => $phone
        );

        $this->db->where('id', $id);
        $this->db->update('student', $data);
        
        $data=array();
        $data['success'] = 'Student Infoo Updated';
        $this->session->set_userdata($data);
        redirect('manage-student');
    }

}
