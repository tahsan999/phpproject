<?php
session_start();
 require '../header.php';
 $about = "SELECT * FROM abouts";
 $about_res = mysqli_query($db_connect, $about);
 $about_assoc = mysqli_fetch_assoc($about_res);
 ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Change about information</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php } unset($_SESSION['success'])?>
                <form action="about_update.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="<?= $about_assoc['title']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $about_assoc['name']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="desp" value="<?= $about_assoc['desp']?>">
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
                <h3>Change Photo</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['photo'])){ ?>
                    <div class="alert alert-success"><?=$_SESSION['photo']?></div>
                <?php } unset($_SESSION['photo'])?>
                <form action="photo_update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Upload Photo</label>
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../footer.php' ?>