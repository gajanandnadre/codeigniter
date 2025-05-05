<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation'); // Load the form validation library
        $this->load->model('CategoryModel');
        $this->load->helper('form'); // Load the form helper
    }
    public function index(){
         
        $this->form_validation->set_rules('cate_name','category name','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');

        if($this->form_validation->run()){
            
        }else{
            $data['categories'] = $this->CategoryModel->all_category();
            $this->load->view('product',$data);
        }
    }
 

}