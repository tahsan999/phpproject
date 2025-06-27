<?php 
session_start();
require 'db.php';
require 'header.php' ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Edit Profile Information</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php } unset($_SESSION['success'])?>
                <form action="profile_update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?=$after_assoc_logged['name']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?=$after_assoc_logged['email']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Change Password</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['password_update'])){ ?>
                    <div class="alert alert-success"><?=$_SESSION['password_update']?></div>
                <?php } unset($_SESSION['password_update'])?>
                <form action="password_update.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" name="new_password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password">
                        <?php if(isset($_SESSION['not_match'])){ ?>
                            <strong class="text-danger"><?=$_SESSION['not_match']?></strong>
                        <?php } unset($_SESSION['not_match'])?>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>