<?php

require '../require/config.php';

if(isset($_POST["id"])){
    
 foreach($_POST["id"] as $id){
     
    $stmt = $conn->prepare("DELETE FROM `users` WHERE `userid` = ?") or die(mysqli_error());
    $stmt->bind_param("i", $id);
    $stmt->execute();
     
 }
    $conn->close();
}
?>