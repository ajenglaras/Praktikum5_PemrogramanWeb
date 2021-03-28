<?php
if (empty($_POST['nama'])) { //jika nilainya nama
    header ("Location:kosong.php"); //maka akan mendirect ke halaman file kosong.php
} else {
    echo "<center>Nama :".$_POST ['nama']."</center><br>"; //jika salah maka akan menampilkan nama
}
?>