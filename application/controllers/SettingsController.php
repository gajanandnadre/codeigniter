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

        $this->form_validation->set_rules('banner','pincode','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');
        if($this->form_validation->run()){
            $post = $this->input->post();
           $check =   $this->SettingsModel->add_pincode($post);
           if($check){
            $this->session->set_flashdata('succMsg','Data inserted successfully');
            redirect('SettingsController/pincode');

           }
        }else{
            $this->load->view('banner');
        }
    }

}