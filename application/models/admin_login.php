<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login extends CI_Model {

    public function admin_info($email, $password) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }

    public function add_admin_info() {
        $data = array();
        $data['email'] = $this->input->post('email',true);
        $data['password'] = $this->input->post('password',true);
       $sdata = array();
            // Upload the files then pass data to your model
            $config['upload_path'] = 'Image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                
                $error =  $this->upload->display_errors();
            } else {
               
                $sdata = $this->upload->data();
                $data['image']=$config['upload_path'].$sdata['file_name'];
               
            }
            
            $this->db->insert('admin',$data);
        }
    

}
