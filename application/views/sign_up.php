
<div class="col-md-6">

   
   
   
                    <h3 align="center">
                        This is sign up form.
                    </h3>
<h2>
    <?php 
    $message=$this->session->userdata('msg');
    if(isset($message))
    {
        echo $message;
        $this->session->unset_userdata('msg');
    }
    ?>
</h2>
    
        <form action="<?php echo base_url();?>index.php/login_user/save_user" method="post" onsubmit="return validateStandard(this)">
                        <table border="0" align="center">
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="first_name" placeholder="First Name" required="1" regexp="JSVAL_RX_ALPHA" tabindex="1" /></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="last_name" placeholder="Last Name" required="1" regexp="JSVAL_RX_ALPHA" tabindex="2"/></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="email" placeholder="email" required="1" regexp="JSVAL_RX_EMAIL" tabindex="3"/></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" placeholder="Your Password" required="1" tabindex="4"/></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" required="1" tabindex="6"></textarea></td>
                            </tr>
                            <tr>
                                <td>Mobile No:</td>
                                <td><input type="text" name="mobile" placeholder="Your Mobile No" required="1" tabindex="7"/></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" name="city" placeholder="Your City" required="1" tabindex="8" /></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                             <td>   <input type="radio" name="gender" value="male" />Male
                                    <input type="radio" name="gender" value="female" />Female
                            </td>
                            </tr>
                            <tr>
                                <td>Blood Group:</td>
                                <td><select tabindex="9"  required="1" name="blood_group">
                                        <option value="0">Select group</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </td>
                            </tr>
                                                        <tr>
                                <td>Rh Factor:</td>
                             <td>   <input type="radio" name="factor" value="positive" />+(ve)
                                    <input type="radio" name="factor" value="negetive" />-(ve)
                            </td>
                            </tr>
                            <tr>
                                <td>Height:</td>
                                <td><input type="text" name="height" placeholder="Your height" required="1" tabindex="10"/>cm</td>
                            </tr>
                             <tr>
                                <td>Weight:</td>
                                <td><input type="text" name="weight" placeholder="Your weight" required="1" tabindex="11"/>lb</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="btn" tabindex="12" value="Sign Up"/></td>
                            </tr>
                        </table>
                    </form>
      </div>