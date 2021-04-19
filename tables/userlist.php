<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
    <table id="usertable" class="table datatable">
        <thead>
            <tr class="warning">
                <th><center></center></th>
                <th><center>User ID</center></th>
                <th><center>Fullname</center></th>
                <th><center>Username</center></th>
                <th><center>Password</center></th>
                <th><center>User Role</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
    require '../require/config.php';
    
    $query = $conn->query("CALL readAllUserData()")or die(mysqli_error());
    while($fetch = $query->fetch_array()){
    
//    $query = $conn->query("SELECT * FROM `users`") or die(mysqli_error());
//    while($fetch = $query->fetch_array()){

        ?>
            <tr>
                <td><center><input type="checkbox" name="user_id[]" class="deleteuser" value="<?php echo $fetch["userid"]; ?>" /></center></td>
                <td><center><strong><?php echo $fetch['userid']?></strong></center></td>
                <td><?php echo $fetch['fullname']?></td>
                <td><center><?php echo $fetch['username']?></center></td>
                <td><center><?php echo $fetch['password']?></center></td>
                <td><center><?php echo $fetch['userrole']?></center></td>
                <td><center>
                    <button class="btn btn-sm btn-success editBtn" data-toggle="modal" data-target="#edit" id="<?php echo $fetch['userid']?>">EDIT</button>
                    </center>
                
                </td>
            </tr>
            <?php
    }
    $conn->close();
        ?>
        </tbody>
    </table>
</div>
<?php
}
?>
