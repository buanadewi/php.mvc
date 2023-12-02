<?php
include('koneksiMVC.php');
if (isset($_POST['update'])) {
    if (isset($_POST['gender']) != '' ){
    $res = $mysqli->query("UPDATE 05_login SET username = '$_POST[username]', pass = '$_POST[pass]', nama_lengkap = '$_POST[fullname]', jenis_kelamin ='$_POST[gender]', alamat = '$_POST[address]' WHERE username = '$_GET[username]'");
}
    else {
        $res = $mysqli->query("UPDATE 05_login SET username = '$_POST[username]', pass = '$_POST[pass]', nama_lengkap = '$_POST[fullname]', alamat = '$_POST[address]' WHERE username = '$_GET[username]'");
        
    }
    
}
header("location:checkUser.php");