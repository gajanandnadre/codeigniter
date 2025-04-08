<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller{

    public function index(){
         
        // $var['name'] = "Hello codeigniter";

        $data['names'] = array('gaju','rama','maroti','vishnu');

        $this->load->view('about',$data);
    }
 

}