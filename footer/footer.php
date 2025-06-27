<?php 
session_start();
require '../header.php' ;
$select = "SELECT * FROM footer";
$select_res = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_res);
?>
<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Update Footer Content</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success"><?=$_SESSION['success']?></div>
                <?php } unset($_SESSION['success'])?>
                <form action="footer_update.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Footer Text</label>
                        <input type="text" class="form-control" name="footer_text" value="<?=$after_assoc['footer_text']?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../footer.php' ; ?>