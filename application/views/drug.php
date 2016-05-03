<div class="col-md-6">
    
    
    
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
     
                               <h4> Selected drug information</h4>
                               
                             </br>
                        <table border="1"  width="500">
                           
                            <tr height="40">
                                
                                <td>Generic Name
                                </td>
                                <td>Indications
                                </td>
                                <td>Dosage
                                </td>
                             <td>Side Effects
                                </td>
                                 <td>Price
                                </td>
                                
                            </tr>
                
                    
                         
                            
                                
                                <?php
                            
                            foreach ($results as $s)
                            {
                                echo '<tr>';
                               
                                echo '<td>'.$s->generic_name.'</td>';
                                echo '<td>'.$s->indications.'</td>';
                                echo '<td>'.$s->dosage.'</td>';
                                 echo '<td>'.$s->side_effects.'</td>';
                                  echo '<td>'.$s->price.'</td>';
                                echo '</tr>';
                            }
                                
                            ?>
                           
                        </table>
                    </form>
                
</div>
            </div>
        </body>
        </html>
        
    
    
    
    
    
    
</div>