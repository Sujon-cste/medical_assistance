<div class="col-md-6">

<h3>Login</h3>

    <?php 
    $message=$this->session->userdata('msg');
    if(isset($message))
    {
        echo $message;
        $this->session->unset_userdata('msg');
    }
    ?>

<!-- <form action="<?php echo base_url() ?>index.php/login_user/enter_user" method="post">
<table border="0" align="center">
    <tr>
        <td>Email Address:</td>
        <td><input type = "text" name = "email" placeholder = "your Email" tabindex = "3"/></td>
    </tr>

    <tr>
        <td>Password:</td>
        <td><input type = "password" name = "password" placeholder = "Your Password" tabindex = "4"/></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="btn" tabindex="11" value="Login"/></td>
    </tr>
</table>
</form> -->
<form action="<?php echo base_url() ?>index.php/login_user/enter_user" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name = "email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" class="form-control" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>













    

