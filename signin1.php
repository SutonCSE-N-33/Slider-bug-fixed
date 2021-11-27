<?php include "conn1.php" ?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
      
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql2 = "select * from tbl_login where name='$name' && password='$password'";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_num_rows($result);

    if($row > 0){
        session_start();
        $_SESSION['login'] = true;
        header("location:admin-panel.php");
    }else{
        echo "Error! UserName or Password not matched";
    }
  }

?>