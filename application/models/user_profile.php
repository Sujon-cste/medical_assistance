<?php


class User_Profile extends CI_Model {
    public function profile_model($user_id)
    {
        $this->db->select('*');
        $this->db->from('user_data');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
        
    }
    public function activate_user_account_status($user_id)
    {
        $this->db->set('activation_status',1);
        $this->db->where('user_id', $user_id);
        $this->db->update('user_data');
    }

    public function user_update($data,$user_id)
    {
        $this->db->where('user_id', $user_id);
$this->db->update('user_data', $data); 
    }
    //put your code here
}

?>
