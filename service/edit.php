<?php 
session_start();
require '../header.php'; 
$service_id = $_GET['id'];

$select_service = "SELECT * FROM services WHERE id=$service_id";
$select_service_res = mysqli_query($db_connect, $select_service);
$after_assoc = mysqli_fetch_assoc($select_service_res);
?>

<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Edit Service</h3>
            </div>
            <div class="card-body">
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?=$service_id?>">
                    <div class="mb-3">
                        <label class="form-label">Service Title</label>
                        <input type="text" name="title" class="form-control" value="<?=$after_assoc['title']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Service Description</label>
                        <textarea name="desp" class="form-control"><?=$after_assoc['desp']?></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require '../footer.php'; ?>

<?php if(isset($_SESSION['update'])){ ?>
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
        title: "<?=$_SESSION['update']?>"
        });
    </script>
<?php } unset($_SESSION['update'])?>