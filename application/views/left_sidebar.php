               <div id="news-box">
					<h2>News</h2><hr>
					<ul>
	
                  


	
   
    <a href="<?php echo base_url() ?>index.php/welcome/news5"></a>
        <?php 
foreach($result as $vresult)
{
?>

<div class="post">
    <h4 class="title"><?php echo $vresult->title?></h4>
   
  <?php

}
?>                                  
	
                                      
			</ul>
		 </div>