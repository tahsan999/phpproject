<?php 
session_start();
require '../header.php'; 
$select = "SELECT * FROM services";
$select_res = mysqli_query($db_connect, $select);
?>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Service List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Service Title</th>
                        <th>Service Description</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_res as $key=>$service){ ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$service['title']?></td>
                        <td><?=$service['desp']?></td>
                        <td>
                            <a href="edit.php?id=<?=$service['id']?>" class="btn btn-info">Edit</a>
                            <a href="delete.php?id=<?=$service['id']?>" class="btn btn-danger">Delete</a>
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
                <h3>Add New Service</h3>
            </div>
            <div class="card-body">
                <form action="service_post.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Service Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Service Description</label>
                        <textarea name="desp" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require '../footer.php'; ?>

<?php if($_SESSION['success']){ ?>
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "success",
            title: "<?=$_SESSION['success']?>",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
<?php } unset($_SESSION['success'])?>

<?php if($_SESSION['delete']){ ?>
    <script>
        Swal.fire({
            position: "bottom-end",
            icon: "success",
            title: "<?=$_SESSION['delete']?>",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
<?php } unset($_SESSION['delete'])?>