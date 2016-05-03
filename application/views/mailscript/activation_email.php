<h4>hello <?php echo $name;?></h4>
<p>your activation is need to complete</p>
<p>
    your login info:<br/>
    </p>
    <p>
    Email address:<a href> <?php echo $to?></a><br/>
    Password:<?php echo $password?>
    </p>
    <p>
        <stromg>To active your account please click the link below</stromg>
        <a href="<?php echo base_url()?>index.php/Welcome/activate_user_account/<?php echo $user_id?>"><?php echo base_url()?>index.php/Welcome/activate_user_account</a>
        </p>
    <p>
        Regard  
        rateralo
        </p>