<div class="col-md-6">
<form action="<?php echo base_url() ?>index.php/admin/save_drug"  method="post" onsubmit="return validateStandard(this)">
    <h2 align="center"> <u></u></h2>  
    <table border="0" align="center" width="90%">
        <tr> 
            <td>Drug Name:</td>
            <td><input type="text" name="drug_name" placeholder="Drug name" tabindex="1" maxlength="250" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        <tr> 
            <td>Generic Name:</td>
            <td><input type="text" name="generic_name" placeholder="generic name" tabindex="1" maxlength="250" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        
          <tr> 
            <td>Indications:</td>
            <td><input type="text" name="indications" placeholder="" tabindex="1" maxlength="550" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr> 
        
        <tr> 
            <td>Dosage:</td>
             <td><input type="text" name="dosage" placeholder="" tabindex="1" maxlength="550" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
             </tr> 
        
        <tr> 
            <td>side Effects:</td>
             <td><input type="text" name="side_effects" placeholder="" tabindex="1" maxlength="550" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td>         </tr>
        
         <tr> 
            <td>Price:</td>
            <td><input type="text" name="price" placeholder="Drug name" tabindex="1" maxlength="250" required="0"  err="Enter Your First Name" size="40" /><span class="required"> * </span></td> 
        </tr>
        
         <tr>
            <td colspan="2" align="center"><input type="submit" name="btn" tabindex="6" value="Save"/></td>
        </tr>
    </table>
</form>
</div>