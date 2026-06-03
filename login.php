<?php

include "config.php";

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE email='$login' OR phone='$login'";

$result = $conn->query($sql);

if($result->num_rows > 0){

    $user = $result->fetch_assoc();

    if($user['status'] == 'banned'){
        die("Your account has been banned");
    }

    if(password_verify($password,$user['password'])){
        session_start();
        $_SESSION['uid'] = $user['uid'];
        echo "Login Success";
    }else{
        echo "Wrong Password";
    }

}else{
    echo "Account Not Found";
}

?>