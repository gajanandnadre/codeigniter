<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation'); // Load the form validation library
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
        $this->load->helper('form'); // Load the form helper
    }
    public function index(){
         
        $this->form_validation->set_rules('pro_id','product id','required|trim');
        $this->form_validation->set_rules('category','category name','required|trim');
        $this->form_validation->set_rules('pro_name','product name','required|trim');
        $this->form_validation->set_rules('brand','product brand','required|trim');
        $this->form_validation->set_rules('featured','featured ','required|trim');
        $this->form_validation->set_rules('highlight','highlight ','required|trim');
        $this->form_validation->set_rules('description','description','required|trim');
        $this->form_validation->set_rules('stock','stock','required|trim');
        $this->form_validation->set_rules('mrp','mrp','required|trim');
        $this->form_validation->set_rules('selling_price','product price','required|trim');
        $this->form_validation->set_rules('status','status','required|trim');
        if(empty($_FILES['pro_main_image']['name'])){

            $this->form_validation->set_rules('pro_main_image','product main image','required|trim');
        }
        
        if($this->form_validation->run()){

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
            $config['max_size'] = 2048; // max size in KB
            $config['encrypt_name'] = TRUE; // encrypt name for security resoan       
            
            $this->load->library('upload',$config);
            $this->upload->do_upload('pro_main_image');
            
            $image = $this->upload->data();
            $post =  $this->input->post();
            $post['pro_main_image'] = $image['file_name'];
            $check = $this->ProductModel->add_product($post);
            if($check){
                $this->session->set_flashdata('succMsg','Product added successfully');
                redirect('ProductController/');
            }else{
                $this->session->set_flashdata('errMsg','Product failed to added');
                redirect('ProductController/');
            }
          
        }else{
            if($this->session->userdata('pro_id') != ''){
                $pro_id = $this->session->userdata('pro_id');
                // echo $pro_id;
            }else{
                
                $this->session->set_userdata('pro_id',mt_rand(11111,99999));
            }
            $data['pro_id'] = $pro_id;
            $data['categories'] = $this->CategoryModel->all_category();
            $this->load->view('product',$data);
        }
    }
 

}