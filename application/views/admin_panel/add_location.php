<div class="col-md-6">
<form action="<?php echo base_url() ?>index.php/admin/save_location"  method="post" onsubmit="return validateStandard(this)">
    <h2 align="center"> <u></u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Store Name:</td>
            <td><input type="text" name="Store_Name" placeholder="store name" tabindex="1" maxlength="50" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        <tr> 
            <td>District Name:</td>
            <td><input type="text" name="district" placeholder="district" tabindex="1" maxlength="50" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        
          <tr> 
            <td>Thana:</td>
            <td><input type="text" name="thana" placeholder="" tabindex="1" maxlength="50" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr> 
        
        <tr> 
            <td>Address:</td>
             <td><input type="text" name="address" placeholder="" tabindex="1" maxlength="250" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
             </tr> 
        
       
        
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Save"/></td>
        </tr>
    </table>
</form>
</div>




































<!--<form  method="post" action="<?php echo base_url()?>index.php/admin/save_category" onsubmit="return validateStandard(this)">
    <h2 align="center"> <u>Add category</u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Category Name:</td>
            <td><input type="text" name="category_name" placeholder="category Title" tabindex="1" maxlength="25" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        <tr>
            <td>Category Description:</td>
            <td>
                <textarea name="description" placeholder="category Description" id="ck_editor" tabindex="2" cols="31"></textarea>  
<span class="required"> * </span></td> 
        </tr>       
      
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Save"/></td>
        </tr>
    </table>
</form>-->
