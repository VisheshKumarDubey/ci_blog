<h2><?= $title ?></h2>
<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title'] ?></h3>
    <small class="post-date">Posted on : <?php echo $post['created_at'] ?></small>
    <p><?php echo word_limiter($post['body'],50) ?></p>
    <p> <a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More ></a> </p>
<?php endforeach; ?>