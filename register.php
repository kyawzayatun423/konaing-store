<?php

include "config.php";

$email = $_POST['email'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$uid = "UID-" . date("Ymd") . "-" . rand(1000,9999);

$sql = "INSERT INTO users(uid,email,phone,password)
VALUES('$uid','$email','$phone','$password')";

if($conn->query($sql)){
    echo "Register Success";
}else{
    echo "Error : " . $conn->error;
}

?>