<h2><?= $title; ?> </h2>

<?php echo validation_errors(); ?>


<?php echo form_open_multipart('categories/create'); ?>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Enter Name" class="form-control">
</div>

<button type="submit" class="btn btn-default">Add New Category</button>


</form>