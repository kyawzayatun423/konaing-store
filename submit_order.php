<?php

include "config.php";

$uid = $_POST['uid'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];

$receipt = $_FILES['receipt']['name'];
move_uploaded_file(
    $_FILES['receipt']['tmp_name'],
    "uploads/".$receipt
);

$sql = "INSERT INTO orders
(uid,email,phone,amount,receipt)
VALUES
('$uid','$email','$phone','$amount','$receipt')";

if($conn->query($sql)){
    echo "Order Submitted";
}else{
    echo "Error : " . $conn->error;
}

?>