<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the fottp://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        public function __construct() {
            parent::__construct();
            $this->load->model('blogger_model');
            $this->load->model('admin_model');
            $this->load->model('user_profile');
               $this->load->library('Googlemaps');
                    
  
        }
        	public function index()
	{
                   $data=array();   
            $data['result']=$this->blogger_model->show_title();
           
            
            $data['main']=$this->load->view('main',$data,true);
            
            
             
     
		$this->load->view('home',$data);
	}
	public function blogs()
	{
            $data=array();
            $data['result']=$this->blogger_model->show_title();
            $data['results']=$this->blogger_model->show_blog();
            $data['main']=$this->load->view('home_msg',$data,true);
           
            $data['title']="Blog";
            $data['header']="s";
            $data['news-box']='true';

		$this->load->view('home',$data);
	}
        	public function about()
	{
            $data=array();
              $data['result']=$this->blogger_model->show_title();
            $data['main']=$this->load->view('about',$data,true);
           // $data['category']=$this->admin_model->get_category();
            $data['title']="Blog";
            $data['header']="s";
            $data['news-box']='true';

		$this->load->view('home',$data);
	}
                	
        	public function pharmacy()
	{
               
                  //  $this->googlemaps->initialize();
                    
    $city=$this->input->post('district');
    $data=array();
       $data['result']=$this->blogger_model->show_title();
     $data['results']=$this->blogger_model->check_city($city);

                             //   $data['map'] = $this->googlemaps->create_map();

           
                   
                  //echo'<pre>';
            //print_r($_POST);
           //exit(); 
                    
        if($data['results'])
            {
            
            $data['main']=$this->load->view('pharmacy',$data,true);
            
           // $data['category']=$this->admin_model->get_category();
            $data['title']="Blog";
            $data['header']="s";
            $data['archives']='true';

		$this->load->view('home',$data);}
                    //  redirect("login_user/pharmacy","refresh");
	   else {
                 
            
                 redirect ("welcome/country");
             }
        
        }
          	public function symptom()
	{
            $data=array();
            $data['result']=$this->blogger_model->show_title();
            $data['main']=$this->load->view('symptom',$data,true);
        

		$this->load->view('home',$data);
	}
                  public function left_sidebar()
	{

            $data['result']=$this->blogger_model->show_title();
            $data['main']=$this->load->view('index',$data,true);
           // $data['category']=$this->admin_model->get_category();
            $data['title']="Blog";
            $data['header']="s";
            $data['archives']='true';
$this->load->view('home',$data);


	}

        public function news($blog_id)
	{
           $data=array();
            $data['result']=$this->blogger_model->show_title();
           
          // $blog_id=$this->session->userdata('blog_id');
          // echo $blog_id;
            //    exit();
            $data['results']=$this->blogger_model->show_news($blog_id);
            $data['main']=$this->load->view('news',$data,true);         

		$this->load->view('home',$data);
//                         echo'<pre>';
//            print_r($_POST);
//           exit(); 
	}

        
        public function activate_user_account($user_id)
        {
            $this->user_profile->activate_user_account_status($user_id);
              $data=array();
              $data['result']=$this->blogger_model->show_title();
            //$data['result']=$this->blogger_model->show_blog();
            $data['main']=$this->load->view('activation_succesful','',true);
          // $data['category']=$this->admin_model->get_category();
            $data['title']="Blog";
            $data['archives']='true';

		$this->load->view('home',$data);
        }      
        
        public function add_comments($blog_id=NULL)
       {
       
 if(!isset($blog_id))
      
  {
         
   //echo '------'.$blog_id;
          
  $blog_id=$this->session->userdata('blog_id');
          
  //echo '+++++++'.$blog_id;
           
 $this->session->unset_userdata('blog_id');
        
}
        
        
$data=array();
        
$data['result']=$this->blogger_model->select_blog_by_blog_id($blog_id);


//echo '<pre>';
      
//print_r($data['result']);
      
  $data['comments']=$this->blogger_model->select_comments_by_blog_id($blog_id);
       
 $data['main']=$this->load->view('add_comments',$data,true);

 //$data['category']=$this->admin_model->get_category();

$data['title']='Blog';
       
 $data['archive']='true';
        
$this->load->view('home',$data);
    }
  public function save_comments()
    
{
        
$data=array();
      
 $data['name']=$this->input->post('name',true);
        
$data['blog_id']=$this->input->post('blog_id',true);
      
$data['description']=$this->input->post('comments_description',true);

 $this->blogger_model->save_comments_info($data);
        
$sdata=array();
        
       
 $sdata['blog_id']=$data['blog_id'];
        
$this->session->set_userdata($sdata);
      
  redirect("welcome/index");
    }
            	public function gmap()
	{
                    
                   $config=array();
                    $config['center']='maijdi,noakhali,bangladesh';
                   $config['zoom']='auto';
                
                 $this->googlemaps->initialize($config);
//                    $marker=array();
//                    $marker['position']='sonaimuri,noakhali,bangladesh';
//                    $this->googlemaps->add_marker($marker);
//                     $marker=array();
//                    $marker['position']='chowmuhony,noakhali,bangladesh';
//                    $this->googlemaps->add_marker($marker);
                     
//                     $marker=array();
//                    $marker['position']='chowrasta,noakhali,bangladesh';
//                    $this->googlemaps->add_marker($marker);
    
    $data=array();
    

                                $data['map'] = $this->googlemaps->create_map();

          $data['result']=$this->blogger_model->show_title();
                   
                  //echo'<pre>';
            //print_r($_POST);
           //exit(); 
                    
       
            
            $data['main']=$this->load->view('gmap',$data,true);
            
            //$data['category']=$this->admin_model->get_category();
            $data['title']="Blog";
            $data['header']="s";
            $data['archives']='true';

		$this->load->view('home',$data);
                    //  redirect("login_user/pharmacy","refresh");
	
        
        }
   
      
                   	public function country()
	{
           
	      $data=array();
            $data['result']=$this->blogger_model->show_title();
            $data['main']=$this->load->view('country',$data,true);
          //  $data['category']=$this->admin_model->get_category();
            $data['title']="Blog";
            $data['header']="s";
            $data['archives']='true';

		$this->load->view('home',$data);
        
        }
   
        
            	public function drug()
	{
                    
                      $drug=$this->input->post('drug_name');
    $data=array();
       $data['result']=$this->blogger_model->show_title();
     $data['results']=$this->blogger_model->search_drug($drug);

                    
        if($data['results'])
            {
            
            $data['main']=$this->load->view('drug',$data,true);
            
           // $data['category']=$this->admin_model->get_category();
            $this->load->view('home',$data);
        
            }
                    //  redirect("login_user/pharmacy","refresh");
	    else {
                 
            
                 redirect ("welcome/nodrug");
             }
        }                       	
        public function nodrug()
	{
           
	      $data=array();
            $data['result']=$this->blogger_model->show_title();
            $data['main']=$this->load->view('nodrug',$data,true);
          //  $data['category']=$this->admin_model->get_category();
            $data['title']="Blog";
            $data['header']="s";
            $data['archives']='true';

		$this->load->view('home',$data);
        
        }   
                    
                    
      
        

		
	}
        


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */