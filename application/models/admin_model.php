<?php

class Admin_Model extends CI_Model {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function admin_login_model($admin_email,$admin_password)
    {
       //$this->db->insert('admin',$data);
            $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_email',$admin_email);
        $this->db->where('admin_password',($admin_password));
        $query_r=$this->db->get();
        $result=$query_r->row();
        return $result;
    }
    public function save_cat_info($data)
    {
        $this->db->insert('category',$data);
        
    }
    public function get_category()
    {
        $this->db->select('*');
        $this->db->from('category');
        $mysql=$this->db->get();
        $result=$mysql->result();
        return $result;
    }
           public function add_drug($data){
        $this->db->insert('drug',$data);
//        $user_id= $this->db->insert_id();
        
    }
            public function add_location($data){
        $this->db->insert('medical_store',$data);
//        $user_id= $this->db->insert_id();
        
    }
}

?>
