<?php 
session_start();
require 'db.php';
require 'header.php' ;

$select = "SELECT * FROM users";
$select_users = mysqli_query($db_connect, $select);
?>
<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h2>Users List</h2>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success" role="alert">
                        <?=$_SESSION['success']?>
                    </div>
                <?php } unset($_SESSION['success'])?>
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_users as $key=>$user){ ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$user['name']?></td>
                        <td><?=$user['email']?></td>
                        <td>
                            <a href="user_delete.php?id=<?=$user['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php' ?>
