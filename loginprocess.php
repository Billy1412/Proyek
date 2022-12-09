<?php
session_start();
require 'connect.php';
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $sql = mysqli_query($con, "SELECT * FROM member where id_member = '$id' and password = '$password'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id_member'];
        $_SESSION["password"] = $row['password'];
        header("Location: wishlist.php");
        header("Location: home.php");
        exit;
    }
    else{
        echo("<script LANGUAGE = 'JavaScript'>
        window.alert('Invalid Member Id/Password');
        window.location.href = 'login.php';
        </script>");
    }
}
?>