<?php
function content($m) //menambahkan fungsi content pada variabel m
{
	$cek = trim($m); //cek variabel m
	if($cek == "") 				{ $file = "beranda.php"; } //masuk ke halaman beranda
	if($cek == "profil") 		{ $file = "profil.php"; } //jika m=profil maka akan menampilkan atau redirect ke halaman profil
	if($cek == "pendidikan") { $file = "pendidikan.php"; } //jika m=pendidikan maka akan menampilkan atau redirect ke halaman pendidikan
	if($cek == "kuliah") 		{ $file = "kuliah.php"; } //jika m=kuliah maka akan menampilkan atau redirect ke halaman kuliah
	return $file;
}
?>