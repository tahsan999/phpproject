<?php
session_start();
require '../header.php';
require '../db.php';

$id = $_GET['id'];
$update = "UPDATE messages SET status=1 WHERE id=$id";
mysqli_query($db_connect, $update);

$select = "SELECT * FROM messages WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Message</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Name:</td>
                        <td><?=$after_assoc['name']?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?=$after_assoc['email']?></td>
                    </tr>
                    <tr>
                        <td>Message:</td>
                        <td><?=$after_assoc['message']?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require '../footer.php';
?>