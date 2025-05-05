<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingsModel extends CI_Model {

    

    public function __construct() {
        parent::__construct();
    }
    
    public function add_pincode($post){
        $q = $this->db->insert('ec_pincode',$post);
        if($q){
            return true;
        }else{
            return false;
        }
    }
    public function all_category(){
        $q = $this->db->where(['status'=>1,'parent_id'=>''])->get('ec_pincode');
        if($q->num_rows()){
            return $q-> result();
        }
    }
    public function add_banner($post){
        $post['added_on'] = date('Y-m-d');
        $post['bann_id'] = mt_rand(11111,99999);
        $q = $this->db->insert(' ec_banner',$post);
        if($q){
            return true;
        }else{
            return false;
        }
    }
}
