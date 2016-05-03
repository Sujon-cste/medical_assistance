
<div class="post">
    <h2 class="title">
        <a href="<?php echo base_url();?>index.php/welcome/add_comments/<?php echo $result->blog_id;?>">
            <?php echo $result->title;?>
        </a>
    </h2>
    <div class="story">
        <p>
            <?php echo $result->description;?>
        </p>
        <br/>
        <hr/>
        <table>
            <?php 
                foreach($comments as $acomments)
                {
            ?>
            <tr>
                <td>Name</td>
                <td>
                    <?php echo $acomments->name;?>
                </td>
            </tr>

            <tr>
                <td>Comment</td>
                <td>
                    <?php echo $acomments->description;?>
                </td>
            </tr>
            <?php } ?>
        </table>
        
        <form action="<?php echo base_url();?>index.php/welcome/save_comments" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" placeholder="Name">
                    <input type="hidden"  name="blog_id" value=>
                </td>
            </tr>

            <tr>
                <td>Comment</td>
                <td><textarea name="description" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            <td><input type="submit" name="btn" value="Submit Comments">
            </td>
            </tr>
        </table>
    </div>
    </form>
    <div class="meta">
        <p class="date">Posted on February 22, 2007 by Admin</p>
        <p class="file">Filed under <a href="#">Uncategorized</a>
            | <a href="#">Edit</a> | <a href="#">28
                Comments</a></p>
    </div>
</div>
