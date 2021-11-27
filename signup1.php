<?php
session_start();
header('location:login.php');
include "conn1.php" ?>

<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];

$sql2 = "select * from tbl_login where name = '$name'";
$result = mysqli_query($conn, $sql2);
$row = mysqli_num_rows($result);
if($row == 1){
    echo "UserName Already Taken";
}else{
    $reg = "insert into tbl_login(name, email, password, c_password) values ('$name', '$email', '$password', '$c_password')";
    if(mysqli_query($conn, $reg)){
        echo "Resistration Successfull";
    }else{
        echo "Error! Registration Fail";
    }
    
}


?>