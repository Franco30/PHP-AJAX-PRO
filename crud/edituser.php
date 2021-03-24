<?php
    require '../require/config.php';

if(isset($_POST['edit_id'])){
    
    $id = $_POST['edit_id'];
    
    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `userid` = '$id'") or die(mysqli_error());
    if($stmt->execute()){
    $result = $stmt->get_result();
    $fetch = $result->fetch_array(MYSQLI_ASSOC);
    }
    
    echo json_encode($fetch);
}

if(isset($_POST['action']) && $_POST['action'] == "update"){
    
    $id=$_POST['id'];
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $userrole=$_POST['userrole'];

    
    $stmt = $conn->prepare("UPDATE `users` SET `fullname` = ?, `username` = ?, `password` = ?, `userrole` = ? WHERE `userid` = ?") or die(mysqli_error());
    $stmt->bind_param("ssssi", $fullname, $username, $password, $userrole, $id);
    $stmt->execute();
    $conn->close();
    
}
?>