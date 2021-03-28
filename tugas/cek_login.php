<?php
    ob_start(); /*menyimpan output dalam internal buffer PHP*/
    session_start(); /*memulai eksekusi session pada server */
    ob_end_clean(); /*untuk menghapus otput*/
    $username=$_POST["username"]; /*setting username*/
    $password=$_POST["password"]; /*setting password*/
    if($username=="ajenglw" AND $password=="1234") /*jika username dan password benar*/
    {
        $_SESSION["username"]=$username;
        header("location:home_admin.php"); /*maka akan menampilkan (redirect) halaman home_admin */
    }else{
        header("location:form_login.php?login_error"); /*jika username dan password salah maka akan menampilkan 
        (redirect) login eror pada form login*/
    }
?>