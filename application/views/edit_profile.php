
                    <h2 align="center">
                        Edit form
                    </h2>

                    <form name="edit_profile" action="<?php echo base_url() ?>index.php/blogger/update" method="post">
                        <table border="0" align="center">
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="first_name"  value="<?php echo $results->first_name?>" placeholder="First Name" tabindex="1" /></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="last_name" value="<?php echo $results->last_name?>" placeholder="Last Name" tabindex="2"/></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="email" value="<?php echo $results->email?>" placeholder="Email" tabindex="3"/></td>
                            </tr>
                       
                            <tr>
                                <td>Address:</td>
                                <td><textarea cols="30" rows="10" name="address" placeholder="Your Address" tabindex="6">
                                  <?php echo $results->address?>
                                    </textarea></td>
                            </tr>
                            <tr>
                                <td>Mobile No:</td>
                                <td><input type="text" name="mobile" value="<?php echo $results->mobile?>" placeholder="Your Mobile No" tabindex="7"/></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" name="city" value="<?php echo $results->city?>" placeholder="Your City" tabindex="8" /></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                             <td>   
                                 <?php if($results->gender!='male')
                                 {?>
                                 <input type="radio" name="gender" value="male" />Male
                                 <?php } else {?>
                                 <input type="radio" name="gender" value="male" checked="checked" />Male
                                  <?php }if($results->gender=='female')
                                 {?>
                                 <input type="radio" name="gender" value="female" checked="checked"/>Female
                                  <?php } else {?>
                                    <input type="radio" name="gender" value="female" />Female
                                    <?php }?>
                            </td>
                            </tr>
                            <tr>
                                <td>Blood Group:</td>
                                <td><select tabindex="9" name="blood_group"  value="<?php echo $results->blood_group?>">
                                        <option value="0">Select group</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>>
                                    </select>
                                </td>
                            </tr>
                                                        <tr>
                                <td>Rh Factor:</td>
                             <td>   
                                 <?php if($results->factor!='fale')
                                 {?>
                                 <input type="radio" name="factor" value="positive" />+(ve)
                                 <?php } else {?>
                                 <input type="radio" name="factor" value="positive" checked="checked" />+(ve)
                                  <?php }if($results->factor=='negetive')
                                 {?>
                                 <input type="radio" name="factor" value="negetive" checked="checked"/>-(ve)
                                  <?php } else {?>
                                    <input type="radio" name="factor" value="negetive" />-(ve)
                                    <?php }?>
                            </td>
                            </tr>
                            <tr>
                                <td>Height:</td>
                                <td><input type="text" name="height" value="<?php echo $results->height?>" placeholder="Your height" tabindex="10"/></td>
                            </tr>
                                                       <tr>
                                <td>Weight:</td>
                                <td><input type="text" name="weight" value="<?php echo $results->weight?>" placeholder="Your weight" tabindex="11"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="btn" tabindex="12" value="Update"/></td>
                            </tr>
                        </table>
                    </form>
    <script type="text/javascript" language="javascript">
        document.forms['edit_profile'].elements['country'].value='<?php echo $result->country?>';
</script>
