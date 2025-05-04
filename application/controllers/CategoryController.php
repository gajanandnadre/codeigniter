<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation'); // Load the form validation library
        $this->load->model('CategoryModel');
    }
    public function index(){
         
        // $var['name'] = "Hello codeigniter";

        $this->load->helper('form'); // Load the form helper
        $this->form_validation->set_rules('cate_name','category name','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');
        if($this->form_validation->run()){
            $post = $this->input->post();
           $check =   $this->CategoryModel->add_category($post);
           if($check){
            $this->session->set_flashdata('succMsg','Data inserted successfully');
            redirect('CategoryController');

           }
        }else{
            $data['categories'] = $this->CategoryModel->all_category();
            $this->load->view('category',$data);
        }
    }
 

}