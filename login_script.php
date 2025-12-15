<?php
session_start();
include('connect.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user_tbl WHERE u_uname = '$username' and u_password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location: home_page.php");
        }else{
            echo 'Wrong Credentials';
        }
    }
?>