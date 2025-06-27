<?php 
session_start();
require '../header.php'; 
$select = "SELECT * FROM portfolios";
$select_res = mysqli_query($db_connect, $select);
?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Portfolio List</h3>
            </div>
            <div class="card-body">
                <table class="table table-border">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_res as $key=>$portfolio){ ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$portfolio['title']?></td>
                        <td><img width="100" src="../uploads/portfolio/<?=$portfolio['photo']?>" alt=""></td>
                        <td>
                            <a href="delete.php?id=<?=$portfolio['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add New Portfolio</h3>
            </div>
            <div class="card-body">
                <form action="portfolio_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Portfolio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../footer.php'; ?>

<?php  if(isset($_SESSION['success'])){?>
<script>
        const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "success",
        title: "<?=$_SESSION['success']?>"
        });
    </script>
<?php  } unset($_SESSION['success'])?>

<?php  if(isset($_SESSION['delete'])){?>
<script>
        Swal.fire({
            position: "bottom-end",
            icon: "success",
            title: "<?=$_SESSION['delete']?>",
            showConfirmButton: false,
            timer: 1500
        });
</script>
<?php  } unset($_SESSION['delete'])?>