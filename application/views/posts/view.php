<h2><?php echo $post['title'] ?></h2>
<br>
<small class="post-date">Posted on : <?php echo $post['created_at'] ?></small>
<p>
    <?php echo $post['body'] ?>
</p>
<hr>
<?php

echo form_open('/posts/delete/'.$post['id']);
?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>
<a href="edit/<?php echo $post['slug']?>" class="btn btn-primary pull-left">Edit</a>