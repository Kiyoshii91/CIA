<?php
session_start();
include('connect.php');

    if(isset($_POST['submit'])){
        $fname = $_POST['FName'];
        $mname = $_POST['Mname'];
        $lname = $_POST['LName'];
        $bday = $_POST ['birth_date'];
        $age = $_POST ['age']; 
        $email = $_POST ['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $branch = $_POST['branch'];
        $rank = $_POST['rank'];

        $sql = "INSERT INTO user_tbl (`u_fname`, `u_mname`, `u_lname`, `u_bdate`, `u_age`, `u_email`, `u_pnumber`, `u_password`, `u_gender`, `u_tier`, `u_uname`, `u_rank`, `u_branch`) VALUES
        ('$fname','$mname','$lname','$bday','$age','$email','$phone','$password','$gender','1','$username','$rank', '$branch')";
        mysqli_query($conn, $sql);
    //     if($result){
    //         header("Location: home_page.php");
    //         exit;
    //     }else{
    //         echo 'Database Error: ' . mysqli_error($conn);
    //     }
    // }
    }
?>