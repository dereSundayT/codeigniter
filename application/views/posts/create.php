<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" placeholder="Add Title" name="title" />
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
    <label class="form-label">Body</label>
    <textarea name="body" id="editor1" class="form-control" cols="30" rows="10" placeholder="Add Body">
        </textarea>
</div>
<div class="mb-3">
    <label class="form-label">Category</label>
    <select name="category_id" class="form-control" name="category_id">
        <?php foreach ($categories as $category) : ?>
            <option value="<?= $category['id']; ?>"> <?= $category['name']; ?> </option>


        <?php endforeach; ?>


    </select>

</div>

<div class="mb-3">
    <label class="form-label">Upload Image</label>
    <input type="file" class="form-control" placeholder="Add Title" name="userfile" size="20" />
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>