<h2><?= $post['title']; ?></h2>

<small class="post-date"> Posted on: <?php echo $post['created_at']; ?> </small>
<img class=" img-thumbnail" src="<?= site_url('assets/images/posts/' . $post['post_image']); ?>" width="200" />

<div class="post-body">
    <?php echo $post['body']; ?>
</div>
<hr />
<?php echo form_open('/posts/delete/' . $post['id']); ?>
<a class="btn btn-default pull-left" href="<?php echo site_url('/posts/edit/' . $post['slug']); ?>">Edit </a>
<input type="submit" value="delete" class="btn btn-danger" />
</form>
<hr />
<h3>Comments</h3>

<?php if ($comments) : ?>
    <?php foreach ($comments as $comment) : ?>
        <div class="well">
            <h5><?= $comment['body']; ?> [by <strong> <?= $comment['name']; ?>]</strong></h5>
        </div>
    <?php endforeach; ?>

<?php else : ?>
    <p>No Comments to Display</p>
<?php endif; ?>


<hr />

<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/' . $post['id']); ?>

<div class="form group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form group">
    <label for="name">Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="form group">
    <label for="name">Comment</label>
    <textarea name="body" class="form-control">

        </textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button type="submit" class="btn btn-default p-3">Add Comment</button>



</form>