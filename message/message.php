<?php
session_start();
require '../header.php';
$select_message = "SELECT * FROM messages";
$select_message_res = mysqli_query($db_connect, $select_message);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>All Messages</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_message_res as $key=>$message){ ?>
                    <tr class="<?=($message['status']==0?'bg-light':'')?>">
                        <td><?=$key+1?></td>
                        <td><?=$message['name']?></td>
                        <td><?=$message['email']?></td>
                        <td><?=$message['subject']?></td>
                        <td><?=$message['message']?></td>
                        <td>
                            <a href="view.php?id=<?=$message['id']?>" class="btn btn-info">View</a>
                            <a href="delete.php?id=<?=$message['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require '../footer.php';
?>