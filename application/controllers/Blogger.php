<?php


session_start();
class Blogger extends CI_Controller{
public function __construct() {
    
    
            parent::__construct();
            $this->load->helper('download');
            $this->load->model('user_profile');
            $this->load->model('blogger_model');
            $this->load->model('admin_model');
           
            
              $id=$this->session->userdata('user_id');
    if($id==NULL)
    {
        redirect("login_user/user_login_page","refresh");
    }
             $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'scripts/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "500px", //Setting a custom width
                'height' => '300px', //Setting a custom height
            )
        );

} 
    
    public function index()
	{
            $data=array();
              $data['category']=$this->admin_model->get_category();
            $data['main']=$this->load->view('blogpage','',true);
            $data['title']="Blog";
		$this->load->view('home',$data);
	}
      public function logout()
             {
              
              $this->session->unset_userdata('user_id');
              
                 session_destroy();
              redirect("login_user/user_login_page","refresh");
             }
             
             public function profile()
             {
             $this->load->model('user_profile');
             $user_id=$this->session->userdata('user_id');
             $data=array();
                $data['result']=$this->blogger_model->show_title();
            // $data['category']=$this->admin_model->get_category();
             $data['results']=$this->user_profile->profile_model($user_id);
            $data['main']=$this->load->view('view_profile',$data,true);
               $data['archives']='true';
              $data['header']="s";
            $data['title']=$this->session->userdata('full_name');
		$this->load->view('home',$data);
                 
             }
             public function edit()
             {
                   $this->load->model('user_profile');
             $user_id=$this->session->userdata('user_id');
             $data=array();
                $data['result']=$this->blogger_model->show_title();
             $data['results']=$this->user_profile->profile_model($user_id);
            $data['main']=$this->load->view('edit_profile',$data,true);
            $data['title']=$this->session->userdata('full_name');
		$this->load->view('home',$data);
             }
             public function update()
             {
                 $data=array();
                 $user_id=  $this->session->userdata('user_id');
                   $data['first_name']=$this->input->post('first_name',true);
            $data['last_name']=$this->input->post('last_name',true);
            $data['email']=$this->input->post('email',true);
            
            $data['address']=$this->input->post('address',true);
            $data['mobile']=$this->input->post('mobile',true);
            $data['city']=$this->input->post('city',true);
            $data['gender']=$this->input->post('gender',true);
            $data['blood_group']=$this->input->post('blood_group',true);
            $data['factor']=$this->input->post('factor',true);
            $data['height']=$this->input->post('height',true);
            $data['weight']=$this->input->post('weight',true);
           
            
            $result=$this->user_profile->user_update($data,$user_id);
            redirect("Blogger/profile");
             }
             public function add_blog()
             {
       
                  $data=array();
                     $data['result']=$this->blogger_model->show_title();
                  $data['editor'] = $this->data;
                  $data['header']="s";
                   //$data['category']=$this->admin_model->get_category();
            $data['main']=$this->load->view('add_blog',$data,true);
            $data['title']="Add Blog";
            $data['archives']='true';
		$this->load->view('home',$data);
             }
             public function save_post()
             {
                 $user_id=$this->session->userdata('user_id');
                 $data=array();
                 
                 $data['user_id']=$this->session->userdata('user_id');
                 $data['title']=$this->input->post('title',true);
                 $data['description']=$this->input->post('description',true);
                 $data['status']=$this->input->post('status',true);
                 $data['published_time']=  date('Y-m-d');
                $this->blogger_model->add_post($data,$user_id);
                redirect ("Blogger/add_blog"); 
             }
                    public function view_my_blog(){


            $data=array();
            $data['result']=$this->blogger_model->show_title();
            $user_id=$this->session->userdata('user_id');

           // $data['category']=$this->admin_model->get_category();
             
            $data['results']=$this->blogger_model->show_my_blog($user_id);
            $data['main']=$this->load->view('home_msg',$data,true);
            $data['title']="Blog";
               
              $data['header']="s";
            $data['archives']='true';

		$this->load->view('home',$data);
	}
 
        
 



        
}

?>
