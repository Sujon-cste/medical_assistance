<?php
session_start();
class Admin extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');

        $this->load->helper('download');
        
        
        
                      $id=$this->session->userdata('user_id');
    if($id==NULL)
    {
//        $this->load->view('admin_panel/admin_login');
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
    public function index(){
        $this->load->view('admin_panel/admin_login');
    }
    public function admin_login()
    {
        
        $admin_email=$this->input->post('login');
         $admin_password=$this->input->post('pass');
         $result=  $this->admin_model->admin_login_model($admin_email,$admin_password);
    if($result)
    {
            $data=array();
    $data['name']=$result->admin_name;
    $data['admin_id']=$result->admin_id;
    $data['admin_status']=$result->admin_status;
    $this->session->set_userdata($data);
    $data['main']=$this->load->view('admin_panel/admin_home');
      
    }
 else {
  echo "invalid user name or password";
         $this->load->view('admin_panel/admin_login');
    }
    }
    
    
    public function logout()            {
 
        $this->session->unset_userdata('admin_id');
        session_destroy();
        redirect('admin/index');
    }
    public function add_category()
    {
        $data=array();
        $data['main']=$this->load->view('admin_panel/category','',true);
        $this->load->view('admin_panel/admin_home',$data);
       
        
    }
    public function  save_category()
    {
        $data=array();
        $data['category_name']=$this->input->post('category_name',true);
        $data['description']=$this->input->post('description',true);
        $this->admin_model->save_cat_info($data);
        redirect("admin/add_category");
    }
         public function add_drug()
             {
       
                  $data=array();
                     
       
            $data['main']=$this->load->view('admin_panel/add_drug',$data,true);
           
		$this->load->view('admin_panel/admin_home',$data);
             }
                  public function save_drug()
             {
       
                 $data=array();
                 
               
                 $data['drug_name']=$this->input->post('drug_name',true);
                 $data['generic_name']=$this->input->post('generic_name',true);
                 $data['indications']=$this->input->post('indications',true);
                  $data['dosage']=$this->input->post('dosage',true);
                   $data['side_effects']=$this->input->post('side_effects',true);
                    $data['price']=$this->input->post('price',true);
                $this->admin_model->add_drug($data);
                redirect ("admin/add_drug"); 
             }
             
             
              public function add_location()
             {
       
                  $data=array();
                     
                

            $data['main']=$this->load->view('admin_panel/add_location',$data,true);
           
		$this->load->view('admin_panel/admin_home',$data);
             }
                            public function  save_location()
             {
       
                 $data=array();
                 
               
                 $data['Store_Name']=$this->input->post('Store_Name',true);
                 $data['district']=$this->input->post('district',true);
                 $data['thana']=$this->input->post('thana',true);
                  $data['address']=$this->input->post('address',true);
                  $this->admin_model->add_location($data);
                redirect ("admin/add_location"); 
             }
   
}


?>
