<?php
 $servername = "localhost";
 $username="root";
 $password ="";


 $conn = mysqli_connect($servername, $username, $password);
//  if(!$conn){
//      die("Connect Error!".mysqli_connect_error());
//  }else{
//      echo "mysqli connected successfully";
//  }

// $sql = "create database db_sdp1_project";
// if(mysqli_query($conn,$sql)){
//     echo "Database created successfully";
// }else{
//     echo "Database not created successfully";
// }
$sql = "use db_sdp1_project";
mysqli_query($conn,$sql);

// $sql1 = "create table tbl_user_feedback(name varchar(255) primary key, email varchar(255),age int, phone int,feedback varchar(255))";
// if(mysqli_query($conn,$sql1)){
//     echo "table created Successfully";
// }else{
//     echo "table is not created";
// }

// $sql1 = "create table tbl_login(name varchar(255) primary key, email varchar(255),password varchar(255), c_password varchar(255))";
// if(mysqli_query($conn,$sql1)){
//     echo "table created Successfully";
// }else{
//     echo "table is not created";
// }

?>