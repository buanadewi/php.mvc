<?php
include "koneksiMVC.php";
if (isset($_GET['name'])){
$mysqli->query("DELETE FROM comment WHERE
name='$_GET[name]'");
}
header("location:checkUser.php");