<!DOCTYPE html>

<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<title>medical_assistance</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Font Awesome -->
    	<link rel="stylesheet" href="<?php echo base_url()?>css/font-awesome.min.css">

    	<!-- Bootstrap -->
    	<link href='<?php echo base_url()?>http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    	<link href='<?php echo base_url()?>http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    	<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="<?php echo base_url()?>css/styles.css" rel="stylesheet">
        <link href="<?php echo base_url()?>css/home_styles.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url();?>js/jsval.js"></script>
    </head>

    <body>
    	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php echo base_url() ?>index.php/welcome/index">MedicalAssistance</a>
           </div> 

           <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                   <li><a href="<?php echo base_url() ?>index.php/welcome/index">Home</a></li>
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="http://www.facebook.com">Facebook</a></li>
                           <li><a href="http://www.twitter.com">Twitter</a></li>
                       </ul>
                   </li>
                   <?php 
                   $data=$this->session->userdata('user_id');
                   if($data!=NULL)
                   {
                   }
                   else
                   {
                    ?>
                    <li><a href="<?php echo base_url()?>index.php/welcome/blogs">Blog</a></li>
                    <li><a href="<?php echo base_url()?>index.php/welcome/about">About us</a></li>

                    <li><a href="<?php echo base_url() ?>index.php/login_user/user_login_page">Log in</a></li>

                    

                    <?php
                }
                ?>
                

                <?php 
                $data=$this->session->userdata('user_id');
                if($data!=NULL)
                {
                    ?>
                    <li><a href="<?php echo base_url() ?>index.php/blogger/view_my_blog" accesskey="2" title="">My Blog</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/blogger/profile" accesskey="3" title="">Profile</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/blogger/add_blog" accesskey="5" title="">Add Blog</a></li>


                    <li><a href="<?php echo base_url() ?>index.php/blogger/logout" accesskey="4" title="">Logout</a></li>
                    <?php
                }
                else
                {
                    ?>


                    <?php
                }
                ?>
                    
<!--                    drug section-->
 



<!--end drug-->
                    
                </ul>
            </div>    
        </nav>
        <!-- End Navigation -->


        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../../images/slider1.jpeg">
                    <div class="container active">
                        <div class="carousel-caption">
                            <h1>ONLINE MEDICAL ASSISTANCE</h1>
                            <p>We provide you online medical service which help you to get treatment without going anywhere .</p>
                            
                            <?php 
                            $data=$this->session->userdata('user_id');
                            if($data!=NULL)
                            {
                            }
                            else
                            {
                                ?>


                                <p><a href="<?php echo base_url() ?>index.php/login_user/sign_up" class="btn btn-primary btn-large">Sign up</a></p>

 

                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../../images/slider2.jpg">
                    <div class="container active">
                        <div class="carousel-caption">
                            <h1>DOCTORS ADVICE</h1>
                            <p>Here you can contact with specialist,who will be available in 24 hours.</p>

                            <?php 
                            $data=$this->session->userdata('user_id');
                            if($data!=NULL)
                            {
                            }
                            else
                            {
                                ?>


                                <p><a href="<?php echo base_url() ?>index.php/login_user/sign_up" class="btn btn-primary btn-large">Sign up</a></p>



                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../../images/slider3.jpeg">
                    <div class="container active">
                        <div class="carousel-caption">
                            <h1>SAVE TIME</h1>
                            <p>Finding nearest medical store by using our site is  saved your time.</p>

                            <?php 
                            $data=$this->session->userdata('user_id');
                            if($data!=NULL)
                            {
                            }
                            else
                            {
                                ?>


                                <p><a href="<?php echo base_url() ?>index.php/login_user/sign_up" class="btn btn-primary btn-large">Sign up</a></p>



                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>    
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>    
        <!--Carousel End -->


        <div class="intro-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <img class="img-responsive tpad" src="../../images/medilogo.png">
                    </div>
                    <div class="col-xs-9">
                        <h1>MedicalAssistance</h1>
                        <p class="lead">Medical Assitance is a unique App designed to help people all over the world to get treatment quicker
                        


    <li>We create elegant, professional, user-friendly websites.</li>
    <li> We recommend features suited to your specific requirements.</li>
   <li> We understand the guidelines medical websites must adhere to.</li>
   <li> We provide project management to make the site creation process easy.</li>

</p>
                    </div>
                </div>
            </div>    
        </div>

<!--        start drug section-->
<!-- <div class="container padded">
    <div class="row">
        
    </div>
</div>   -->      
        
<!--        end drug section-->
<div  class="container padded">	
    <div class="row">
        <div class="col-md-3 col-sm-6">
          
            
            
            
            
            
            
        <!-- </div> --> 
            	
        <!-- <div class="col-sm-6 col-md-3"> -->                
            <div class="panel" id="news-box">
                <div class="panel-header">News</div>
                <div class="panel-body">
                    <?php 
                    foreach($result as $news)
                    {
                        ?> 
                        <span class="news-date"><?php echo $news->published_time?></span>
                        <br>
                        <a href="<?php echo base_url()?>index.php/welcome/news/<?php echo $news->blog_id;?>">
                            <span class="news-desc"><h5 style="padding-left:10px"><?php echo $news->title?></h5><hr></span>
                        </a>
                        <?php
                    }
                    ?>  
                </div>  
            </div>
        </div>

        <?php echo $main;?>      

        <div class="col-sm-6 col-md-3">
              <div class="panel" id="drug_finder">
                <div class="panel-header">SEARCH DRUG (A-Z)</div>
                <div class="panel-body">
                    <ul>
                        
                        <form action="<?php echo base_url();?>index.php/welcome/drug" method="post">
                            <table border="0" align="right">
                                <tr>
                                    <td><h4><b></b></h4></td>
                                    <td><input type="text" name="drug_name" placeholder="Drug Name" tabindex="1" />
                                  </td>
                             
                                    <td>

                                        <input type="submit"  name="btn" class="btn btn-primary" value="go"/>
                                    </td>
                                    <!-- colspan="2" align="center"><a hr="#" class="btn btn-primary btn-large">Go</a> -->
                                </tr>
                            </table>
                        </form>
                    </ul>
                </div>    
            </div>
            
            <div class="panel-separator"></div>   
            
            <div class="panel" id="symptom-checker">
                <div class="panel-header">Symptom Checker</div>
                <div class="panel-body">
                    <p>Take the first step to see what could be causing your symptoms</p>
                    <div id="button">
                        <p><a href="#" class="btn btn-primary btn-large">Get started</a></p>
                    </div>
                </div>
            </div>


            <div class="panel-separator"></div>      

            <div class="panel" id="location-finder">
                <div class="panel-header">Store Locator</div>
                <div class="panel-body">
                    <p>Start By Entering Your City</p>
                    <ul>
                        <form action="<?php echo base_url();?>index.php/welcome/pharmacy" method="post">
                            <table border="0" align="right">
                                <tr>
                                    <td><h4><b>City:</b></h4></td>
                                    <td><input type="text" name="district" placeholder="" tabindex="1" /></td>
                                </tr>

                                <tr>
                                    <td> 
                                        <input type="submit"  name="btn"  class="btn btn-primary" value="go"/>
                                    </td>
                                    <!-- colspan="2" align="center"><a hr="#" class="btn btn-primary btn-large">Go</a> -->
                                </tr>
                            </table>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
         
        <div class="footer">
				<div>
					<div>
						<h4>Blog</h4>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
						</p>
						<a href="<?php echo base_url()?>index.php/welcome/blogs">Go To Blog</a>
					</div>
					<div>
						<h4>Links</h4>
						<ul>
							<li>
								<a href="<?php echo base_url()?>index.php/welcome/index">Home</a>
							</li>
							
							
							<li>
								<a href="<?php echo base_url()?>index.php/welcome/about">About</a>
							</li>
							
							<li>
								<a href="<?php echo base_url()?>index.php/welcome/blogs">Blog</a>
							</li>
							<li>
								<a href="https://www.facebook.com/fokrul.sujon.7">Contact</a>
							</li>
						</ul>
					</div>
					<div class="connect">
						<h4>Keep In Touch</h4>
						<a href="http://www.twiter.com" id="twitter">twitter</a> <a href="http://www.facebook.com" id="facebook">facebook</a> <a href="http://www.googleplus.com" id="googleplus">google+</a>
					</div>
				</div>
				<p>
					&#169; Copyright 2016. All rights reserved
				</p>
			</div>
        
        
        
        <!-- container ends 
        <footer class="footer" role="contentinfo">
        	<div class="container">
        		<ul class="footer-links">
        			<li><a href="<?php echo base_url() ?>index.php/welcome/index">Home</a></li>
        			<li><a href="<?php echo base_url() ?>index.php/welcome/blogs">Blog</a></li>
        			<li>FAQ</li>
        			<li><a href="<?php echo base_url() ?>index.php/welcome/about">About Us</a></li>
        		</ul>
        	</div>
        </footer>

       jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url()?>js/jsval.js"></script>
        <script src="<?php echo base_url()?>js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
        <script>
            $(function (){
                $('.carousel').carousel({
                    interval: 4000
                });
            })    
            
        </script>
    </body>

</html>