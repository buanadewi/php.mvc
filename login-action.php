<?php
session_start();
include('koneksiMVC.php');
if (isset($_POST['username'])) {
    $lgn = $mysqli->query("SELECT * FROM 05_login where username='$_POST[username]'");
    $res = mysqli_fetch_array($lgn);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($res !== null) {

        if ($username == $res['username'] && $password == $res['pass']) {
            $status = $res['stats'];
            $fullname = $res['nama_lengkap'];

            $_SESSION['username'] = $username;
            $_SESSION['status'] = $status;
            $_SESSION['fullname'] = $fullname;
            header('location:profileee.php');
        }
        else {
            echo"<script>alert('wrong username or password');
        window.location.href = 'http://localhost:7882/ProjectDatabase/login.php'</script>";
        }
    } else {
        echo"<script>alert('wrong username or password');
        window.location.href = 'http://localhost:7882/ProjectDatabase/login.php'</script>";
    }
} else {
    header('location:profileee.php');
}