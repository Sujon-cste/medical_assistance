<div class="col-md-6">
    <style type="text/css">
    
    h6{
        margin: 0;
        color:blue;
        text-align: right;
        
    }
  </style>

 <a href="<?php echo base_url()?>index.php/blogger/edit"><h6>Edit Profile</h6></a>
<h2 align = "center">
My profile  
</h2>

</br>
</br>

<table border = "0" align = "center">
<tr>
<td>Full Name:</td>
<td><?php echo $results->first_name.' '.$results->last_name ?></td>
</tr>
<tr>
<td>Email Address:</td>
<td><?php echo $results->email ?></td>
</tr>

<tr>
<td>Address:</td>
<td><?php echo $results->address ?></td>
</tr>
<tr>
<td>Mobile No:</td>
<td><?php echo $results->mobile?></td>
</tr>
<tr>
<td>City:</td>
<td><?php echo $results->city?></td>
</tr>
<tr>
<td>Gender:</td>
<td><?php echo $results->gender ?></td>


</tr>
<tr>
<td>Blood Group:</td>
<td><?php echo $results->blood_group.' '.$results->factor?></td>

</tr>
<tr>
<td>Height:</td>
<td><?php echo $results->height?> cm</td>
</tr>
<tr>
<td>weight:</td>
<td><?php echo $results->weight?> lb</td>
</tr>

</table>

</div>
