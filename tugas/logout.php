<?php
    ob_start(); /*menyimpan output dalam internal buffer PHP*/
    session_start(); /*memulai eksekusi session pada server */
    ob_end_clean(); /*untuk menghapus otput*/
    session_destroy(); /*jika sesi login berhasil*/
    header("location:form_login.php");
 ?>