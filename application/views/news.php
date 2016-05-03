<div class="col-md-6">

<?php 
foreach($results as $vresult)
{
?>

<div class="post">
    <h2 class="title"><?php echo $vresult->title?></h2>
    <div class="story">
        <p>
            <?php echo $vresult->description;
             ?>
                
    </div>
    <div class="meta">
        
        <p class="date">Posted <?php echo date('d-m-Y'); ?></p>
 
    </div>
    <a align="center"></a>
</div>

  <?php

}
?>


</div>