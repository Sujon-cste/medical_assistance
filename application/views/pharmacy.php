
<html ><head>
        
       
      
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $title; ?></title>

        <meta name="keywords" content="" />
        <meta name="description" content="" />
        
          
          <style type="text/css">
    
    h6{
        color:red;
        
    }
  </style>
    
    
    </head>


    <body> 
        <div class="col-md-6">


<div id="drug">
<form>
    </br>
    </br>
     
                               <h4> Store Locator</h4>
                               
                             </br>
                        <table border="1"  width="500">
                           
                            <tr height="40">
                                
                                <td>Name
                                </td>
                                <td>Thana
                                </td>
                                <td>Address
                                </td>
                            
                                
                            </tr>
                
                    
                         
                            
                                
                                <?php
                            
                            foreach ($results as $s)
                            {
                                echo '<tr>';
                               
                                echo '<td>'.$s->Store_Name.'</td>';
                                echo '<td>'.$s->thana.'</td>';
                                echo '<td>'.$s->address?> <a href="<?php echo base_url() ?>index.php/welcome/gmap"><h6>map</h6></a><?php echo '</td>';
                                
                                echo '</tr>';
                            }
                                
                            ?>
                           
                        </table>
                    </form>
                
</div>
            </div>
        </body>
        </html>
        