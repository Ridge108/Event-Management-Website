<?php
    session_start();
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,"event"); 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $s = "select * from user_information where username = '$username' or email='$email' or password='$password'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if($num>= 1){
        header('Refresh:1; url=Sign-In.php');
        echo '<script>alert("The Account Is Already Available!")</script>';
    }
    else{
        $reg = "insert into user_information (username,email,password) values ('$username','$email','$password')";
        mysqli_query($con, $reg);
        $_SESSION['username'] = $username;
        header('Refresh:2; url=Home.php');
        echo '<script>alert("Registration Successful !")</script>';
    }
?>