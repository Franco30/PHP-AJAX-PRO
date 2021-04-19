<?php
    require '../require/config.php';

if(isset($_POST['action']) && $_POST['action'] == "insert"){
    
        $noerror=true;
            // Validate category        
//            if(empty($_POST['fullname'])){
//            $error_message = "Field is empty."; $noerror = false;  
//            } elseif(!filter_var($_POST['fullname'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){$error_message = "Invalid entry."; $noerror=false;} 
//            else {$error_message ="";}
//            
//            if(empty($_POST['fullname'])){
//            $error_message = "Field is empty."; $noerror = false;  
//            } elseif(!filter_var($_POST['fullname'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){$error_message = "Invalid entry."; $noerror=false;} 
//            else {$error_message ="";} 
    
            $fullname = $conn->real_escape_string($_POST['fullname']);
            $username = $conn->real_escape_string($_POST['username']);
            $password = $conn->real_escape_string($_POST['password']);
            $userrole = $conn->real_escape_string($_POST['userrole']);
    

    
    $stmt = $conn->prepare("CALL insertUserData(?,?,?,?)") or die(mysqli_error());
    $stmt->bind_param("ssss", $fullname, $username, $password, $userrole);
    $stmt->execute();
    $conn->close();
    
    //optional
//    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
//    $conn->query("CALL insertUserData('$fullname','$username','$password','$userrole')")or die(mysqli_error());
    
    
//    $stmt = $conn->prepare("INSERT INTO `users` (fullname, username, password, userrole) VALUES (?, ?, ?, ?)") or die(mysqli_error());
//    $stmt->bind_param("ssss", $fullname, $username, $password, $userrole);
//    $stmt->execute();
//    $conn->close();
}
?>