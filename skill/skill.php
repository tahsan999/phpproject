<?php 
session_start();
require '../header.php'; 
$select = "SELECT * FROM skills";
$select_res = mysqli_query($db_connect, $select);
?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Skill List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Skill</th>
                        <th>Percentage</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_res as $key=>$skill){ ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$skill['skill']?></td>
                        <td><?=$skill['percentage']?></td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
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
                <h3>Add New Skill</h3>
            </div>
            <div class="card-body">
                <form action="skill_post.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Skill Name</label>
                        <input type="text" name="skill" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Skill Percentage</label>
                        <input type="text" name="percentage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Skill</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../footer.php'; ?>

<?php if(isset($_SESSION['added'])){ ?>
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
        title: "<?=$_SESSION['added']?>"
        });
    </script>
<?php }  unset($_SESSION['added'])?>