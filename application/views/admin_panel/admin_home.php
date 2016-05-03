<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
        <title>SimpleAdmin</title>
        <!--<form action="<?php echo base_url() ?>index.php/admin/admin_login" method="post">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin_css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin_css/navi.css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url() ?>admin_js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $(".box .h_title").not(this).next("ul").hide("normal");
                $(".box .h_title").not(this).next("#home").show("normal");
                $(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
            });
        </script>
    </head>
    <body>
        <div class="wrap">
            <div id="header">
                <div id="top">
                    <div class="left">
                        <p>Welcome, <strong>Md. Sujon</strong> [ <a href="<?php echo base_url()?>index.php/admin/logout">logout</a> ]</p>
                    </div>
                    <div class="right">
                        <div class="align-right">
                            <p>Last login: <strong>25-04-2016 23:12</strong></p>
                        </div>
                    </div>
                </div>
                
                <div id="nav">
                    <ul>
                        <li class="upp"><a href="#">Main control</a>
                            <ul>
                                <li>&#8250; <a href="http://localhost/medical_assistance/index.php/welcome/index">Visit site</a></li>
                                <li>&#8250; <a href="">Reports</a></li>
                                <li>&#8250; <a href="">Add new page</a></li>
                                <li>&#8250; <a href="">Site config</a></li>
                            </ul>
                        </li>
                        <li class="upp"><a href="#">Manage content</a>
                            <ul>
                                <li>&#8250; <a href="">Show all pages</a></li>
                                <li>&#8250; <a href="">Add new page</a></li>
                                <li>&#8250; <a href="<?php echo base_url() ?>index.php/admin/add_drug">Add new Drug</a></li>
                                <li>&#8250; <a href="<?php echo base_url() ?>index.php/admin/add_location">Add Store location</a></li>
                            </ul>
                        </li>
                        <li class="upp"><a href="#">Users</a>
                            <ul>
                                <li>&#8250; <a href="">Show all uses</a></li>
                                <li>&#8250; <a href="">Add new user</a></li>
                                <li>&#8250; <a href="">Lock users</a></li>
                            </ul>
                        </li>
                        <li class="upp"><a href="#">Settings</a>
                            <ul>
                                <li>&#8250; <a href="">Site configuration</a></li>
                                <li>&#8250; <a href="">Contact Form</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    
            </div>

            <div id="content">
                <div id="sidebar">
                    <div class="box">
                        <div class="h_title">&#8250; Main control</div>
                        <ul id="home">
                            <li class="b1"><a class="icon view_page" href="http://localhost/medical_assistance/index.php/welcome/index">Visit site</a></li>
                            <li class="b2"><a class="icon report" href="">Reports</a></li>
                            <li class="b1"><a class="icon add_page" href="">Add new page</a></li>
                            <li class="b2"><a class="icon config" href="">Site config</a></li>
                        </ul>
                    </div>

                    <div class="box">
                        <div class="h_title">&#8250; Manage content</div>
                        <ul>
                            <li class="b1"><a class="icon page" href="">Show all pages</a></li>
                            <li class="b2"><a class="icon add_page" href="">Add new page</a></li>
                            <li class="b1"><a class="icon photo" href="<?php echo base_url() ?>index.php/admin/add_drug">Add new drug</a></li>
                            <li class="b2"><a class="icon category" href="">Add store location</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <div class="h_title">&#8250; Users</div>
                        <ul>
                            <li class="b1"><a class="icon users" href="">Show all users</a></li>
                            <li class="b2"><a class="icon add_user" href="">Add new user</a></li>
                            <li class="b1"><a class="icon block_users" href="">Lock users</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <div class="h_title">&#8250; Settings</div>
                        <ul>
                            <li class="b1"><a class="icon config" href="">Site configuration</a></li>
                            <li class="b2"><a class="icon contact" href="">Contact Form</a></li>
                        </ul>
                    </div>
                </div>
                <div id="main"> 
                <?php echo $main;?> 
              
                </div>
                
                
                
                
                
                <!-- <div class="half_w half_left">
                        <div class="h_title">Visits statistics</div>
                        <script src="<?php echo base_url() ?>admin_js/highcharts_init.js"></script>
                        <div id="container" style="min-width: 300px; height: 180px; margin: 0 auto"></div>
                        <script src="<?php echo base_url() ?>admin_js/highcharts.js"></script>
                    </div>
                    <div class="half_w half_right">
                        <div class="h_title">Site statistics</div>
                        <div class="stats">
                            <div class="today">
                                <h3>Today</h3>
                                <p class="count">2 349</p>
                                <p class="type">Visits</p>
                                <p class="count">96</p>
                                <p class="type">Comments</p>
                                <p class="count">9</p>
                                <p class="type">Articles</p>
                            </div>
                            <div class="week">
                                <h3>Last week</h3>
                                <p class="count">12 931</p>
                                <p class="type">Visits</p>
                                <p class="count">521</p>
                                <p class="type">Comments</p>
                                <p class="count">38</p>
                                <p class="type">Articles</p>
                            </div>
                        </div>
                    </div> -->

    
             
                    
                    <div class="clear"></div>
            </div>

            <div id="footer">
                <div class="left">
                    <p>Design: <a href="http://kilab.pl">SUJON</a> | Admin Panel: <a href="">MedicineBD.com</a></p>
                </div>
                <div class="right">
                    <p><a href="">Example link 1</a> | <a href="">Example link 2</a></p>
                </div>
            </div>
        </div>
</div>
    </body>
</html>
