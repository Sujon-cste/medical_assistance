<?php


class Login_Model extends CI_Model {
    
    public function save_info($data){
        $this->db->insert('user_data',$data);
       $user_id= $this->db->insert_id();
        return $user_id;
    }
    public function user_check($email)
    {
        $this->db->select('*');
        $this->db->from('user_data');
        $this->db->where('email',$email);
        $query_r=$this->db->get();
        $result=$query_r->row();
        return $result;
    }
    public function cheak_login($email,$password)
    {
         $this->db->select('*');
        $this->db->from('user_data');
        $this->db->where('email',$email);
        $this->db->where('password',md5($password));
        $query_r=$this->db->get();
        $result=$query_r->row();
       
        return $result;
    }
}

?>
