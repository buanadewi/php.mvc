<?php
include "koneksiMVC.php";
if (isset($_GET['username'])){
$mysqli->query("DELETE FROM 05_login WHERE
username='$_GET[username]'");
}
header("location:checkUser.php");