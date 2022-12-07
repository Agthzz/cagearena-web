<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if('Login Sukses')
{
    $_SESSION['username']=$username;

    header('location: ../halaman_utama/halaman_utama.php');
}
?>