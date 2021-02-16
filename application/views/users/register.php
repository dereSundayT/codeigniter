<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="" class="form-control" placeholder="Name" />
</div>

<div class="form-group">
    <label for="name">Zipcode</label>
    <input type="text" name="zipcode" id="" class="form-control" placeholder="ZipCode">
</div>

<div class="form-group">
    <label for="name">Email</label>
    <input type="text" name="email" id="" class="form-control" placeholder="Email">
</div>

<div class="form-group">
    <label for="name">Username</label>
    <input type="text" name="username" id="" class="form-control" placeholder="Username">
</div>
<div class="form-group">
    <label for="name">Password</label>
    <input type="password" name="password" id="" class="form-control" placeholder="Password">
</div>

<div class="form-group">
    <label for="name">Confirm Password</label>
    <input type="password" name="password2" id="" class="form-control" placeholder="Confirmm Password">
</div>

<button type="submit" class="btn btn-primary">Register</button>


<?php echo form_close(); ?>