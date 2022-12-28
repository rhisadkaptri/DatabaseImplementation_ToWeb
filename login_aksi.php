<?php
    session_start();
    include('koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "select * from user where username= '$username' and password= '$password'");

    $xxx=mysqli_num_rows($query);
    if($xxx==TRUE)
    {
        $cek = mysqli_fetch_array($query);
        $_SESSION['username']= $cek['username'];
        $_SESSION['level'] = $cek['level'];
            
        header("location: index.php");

    }

    else
    {
        echo "<script> alert('Your username or password are wrong'); location= 'login.php' </script>";
    }
?>