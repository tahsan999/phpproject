<?php 
session_start();
require '../header.php' ;
$select_logo = "SELECT * FROM logos";
$select_logo_res = mysqli_query($db_connect, $select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_logo_res);
?>
?>
<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Change Logo</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php } unset($_SESSION['success'])?>
                <form action="logo_update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Upload Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <div class="my-2">
                        <img src="../uploads/logo/<?=$after_assoc_logo['logo']?>" width="150" alt="">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Change Logo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../footer.php' ?>