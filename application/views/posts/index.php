<h2><?= $title; ?></h2>
<?php foreach ($posts as $post) : ?>
    <h3> <?php echo $post['title']; ?> </h3>
    <div class="row">
        <div class="col-md-3">
            <img class="img-thumbnail" src="<?= site_url('assets/images/posts/' . $post['post_image']); ?>" width="200" />
        </div>
        <div class="col-md-9">
            <small class="post-date"> Posted on: <?php echo $post['created_at']; ?> in <strong> <?= $post['name']; ?> </strong> </small> <br />

            <?php echo word_limiter($post['body'], 50); ?> <br /> <br />
            <p><a class="btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read More</a></p>

        </div>
    </div>




<?php endforeach; ?>