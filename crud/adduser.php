<?php
    require '../require/config.php';

if(isset($_POST['action']) && $_POST['action'] == "insert"){
    
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $userrole = $conn->real_escape_string($_POST['userrole']);
    
    //optional
//    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    
    $stmt = $conn->prepare("INSERT INTO `users` (fullname, username, password, userrole) VALUES (?, ?, ?, ?)") or die(mysqli_error());
    $stmt->bind_param("ssss", $fullname, $username, $password, $userrole);
    $stmt->execute();
    $conn->close();
}
?>