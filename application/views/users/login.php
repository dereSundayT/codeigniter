<?php echo validation_errors(); ?>

<?php echo form_open('users/login'); ?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center"><?= $title; ?></h1>
        <div class="form-group">
            <label for="name">username</label>
            <input type="text" name="username" id="" class="form-control" placeholder="username" required autofocus>
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </div>
</div>
<?php echo form_close(); ?>