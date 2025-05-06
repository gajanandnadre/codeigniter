<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingsController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation'); // Load the form validation library
        $this->load->model('SettingsModel');
        $this->load->helper('form'); // Load the form helper
    }
    public function pincode(){

        $this->form_validation->set_rules('pincode','pincode','required|trim');
        $this->form_validation->set_rules('deliver_charge','Delivery Charge','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');
        if($this->form_validation->run()){
            $post = $this->input->post();
           $check =   $this->SettingsModel->add_pincode($post);
           if($check){
            $this->session->set_flashdata('succMsg','Data inserted successfully');
            redirect('SettingsController/pincode');

           }
        }else{
            $this->load->view('pincode');
        }
    }
    
    public function banner(){
        
        if(empty($_FILES['bann_image']['name'])){
            $this->form_validation->set_rules('bann_image','banner image','required|trim'); 
        }
        $this->form_validation->set_rules('status','status','required|trim');
        if($this->form_validation->run()){
            // Configure upload preferences
        $config['upload_path']   = './uploads/'; // Upload directory
        $config['allowed_types'] = 'jpg|jpeg|png|pdf'; // Allowed file types
        $config['max_size']      = 2048; // Max file size in KB
        $config['encrypt_name']  = TRUE; // Encrypt the file name for security

        // Load the upload library
        $this->load->library('upload', $config);
        $this->upload->do_upload('bann_image');
       
        $post = $this->input->post();
        $image = $this->upload->data();
        $post['bann_image'] = $image['file_name']; 
        
           $check =   $this->SettingsModel->add_banner($post);
           if($check){
            $this->session->set_flashdata('succMsg','Data inserted successfully');
            redirect('SettingsController/banner');

           }
        }else{
            $this->load->view('banner');
        }
    }

}