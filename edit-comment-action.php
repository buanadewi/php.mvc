<?php
include('koneksiMVC.php');
if (isset($_POST['update'])) {
    if (isset($_POST['gender']) != '' ){
    $res = $mysqli->query("UPDATE comment SET name = '$_POST[name]', pesan = '$_POST[pesan]' WHERE name = '$_GET[name]'");
}
    else {
        $res = $mysqli->query("UPDATE comment SET name = '$_POST[name]', pesan = '$_POST[pesan]' WHERE name = '$_GET[name]'");
        
    }
    
}
header("location:checkUser.php");