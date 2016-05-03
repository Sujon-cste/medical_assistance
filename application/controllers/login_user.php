<?php if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Login_User extends CI_Controller{
public function __construct() {
  
    
    parent::__construct();
   
    $this->load->model('login_model');
    $this->load->model('admin_model');
    $this->load->model('blogger_model');
     $this->load->model('mail');
    $id=$this->session->userdata('user_id');
    if($id!=NULL)
    {
        redirect("Blogger","refresh");
    }
    
}
            
    
    public function sign_up(){
            $data=array();
               $data['result']=$this->blogger_model->show_title();
            // $data['category']=$this->admin_model->get_category();
            $data['main']=$this->load->view('sign_up','',true);
            $data['title']="Sign up";
              $data['header']="s";
              $this->load->view('home',$data);
        }
        
        public function save_user(){
            $data=array();
            
            //echo'<pre>';
            //print_r($_POST);
           //exit();
            $data['first_name']=$this->input->post('first_name',true);
            $data['last_name']=$this->input->post('last_name',true);
            $data['email']=$this->input->post('email',true);
            $data['password']=$this->input->post('password',true);
            $data['password']=  md5($data['password']);
            $data['address']=$this->input->post('address',true);
            $data['mobile']=$this->input->post('mobile',true);
            $data['city']=$this->input->post('city',true);
            $data['gender']=$this->input->post('gender',true);
            $data['blood_group']=$this->input->post('blood_group',true);
            $data['factor']=$this->input->post('factor',true);
            $data['height']=$this->input->post('height',true);
            $data['weight']=$this->input->post('weight',true);
           
            
            $result=$this->login_model->user_check($data['email']);
            if($result)
            {
               
                $sdata=array();
                $sdata['msg']="user already exist";
                $this->session->set_userdata($sdata);
                redirect ("login_user/sign_up");
            }
            else{
               
                $user_id= $this->login_model->save_info($data);
               //echo $user_id;
                //exit();
                $mdata=array();
                $mdata['user_id']=$user_id;
                $mdata['from']="fokrulsujon@gmail.com";
                $mdata['admin_name']="Fokrul Islam";
                $mdata['sub']="blog";
                $mdata['name']=$data['first_name'];
                $mdata['password']=$this->input->post('password',true);
                $mdata['to']=$data['email'];
                
                
                $result=$this->mail->send_email($mdata,'activation_email');
                
                $this->login_model->save_info($data);
            redirect ("login_user/sign_up"); 
            }
           
            
            
        }
        public function user_login_page()
        {
            
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $data=array();
              $data['result']=$this->blogger_model->show_title();
            //$data['category']=$this->login_model->cheak_login($email,$password);
          
              $data['main']=$this->load->view('user_login','',true);
             $data['title']="Photos";
              $data['header']="s";
              $data['archives']="s";
            
            
            
            $this->load->view('home',$data);
        }
        public function enter_user()
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');
           
            $result=$this->login_model->cheak_login($email,$password);

            $data=array();
             
            if($result)
            {
                 if($result->activation_status==1){
                $data['full_name']=$result->first_name.' '.$result->last_name;
                $data['user_id']=$result->user_id;
                $data['login_status']=TRUE;
                $this->session->set_userdata($data);
                redirect("welcome/index","refresh");
                   }
              else {
                   $sdata=array();
               
                    $sdata['exception']="you need to activate your id from email account";
                 $this->session->set_userdata($sdata);
                 redirect ("login_user/user_login_page");
     
               }
            
            }
            else {
                 
                 $sdata['msg']="You need to signup first or wrong email or password";
                 $this->session->set_userdata($sdata);
                 redirect ("login_user/user_login_page");
             }
        }
          
    

}
?>