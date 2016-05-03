<?php


class Blogger_Model extends CI_Model{
    //put your code here
    
       public function add_post($data,$user_id){
        $this->db->insert('blog',$data);
//        $user_id= $this->db->insert_id();
        
    }
         public function show_blog()
             {
                 $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('status',1);
        
        $query=$this->db->get();
        $result=$query->result();
        return $result;
             }
                public function show_my_blog($user_id)
             {
                 $this->db->select('*');
        $this->db->from('blog');
        
        $this->db->where('user_id',$user_id);
        
        $query=$this->db->get();
        $result=$query->result();
        return $result;
             }
               public function select_blog_by_blog_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
      public function select_comments_by_blog_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->where('blog_id',$blog_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
              public function select_all_files(){
        
           $this->db->select('*');
        $this->db->from('upload_file');
      
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
           public function select_file_by_file_id($file_id){
        
          $this->db->select('*');
        $this->db->from('upload_file');
       $this->db->where('file_id', $file_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function save_comments_info($data)
    {
        $this->db->insert('comments',$data);
    }
    
    public function check_city($city)
    {
    $this->db->select('*');
        $this->db->from('medical_store');
       
        $this->db->where('district',$city);
        
        $query_r=$this->db->get();
        $result=$query_r->result();
       
        return $result;
    }
    
    
          public function show_title()
             {
                 $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('status',1);
        
        $query=$this->db->get();
        $result=$query->result();
        return $result;
             }
                      public function show_news($blog_id)
             {
                 $this->db->select('*');
        $this->db->from('blog');
        
        $this->db->where('blog_id',$blog_id);
        
        $query=$this->db->get();
        $result=$query->result();
        return $result;
             }
             
               public function search_drug($drug)
    {
    $this->db->select('*');
        $this->db->from('drug');
       
        $this->db->where('drug_name',$drug);
        
        $query_r=$this->db->get();
        $result=$query_r->result();
       
        return $result;
    }
           
}

?>
