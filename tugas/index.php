<?php
include "function.php"; /* termasuk halaman function */
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Website Ajeng Laras</title> <!--judul header browser-->
		<link rel="stylesheet" type="text/css" href="css/style.css"> <!--memberi style css yang menuju ke file syle.css-->
	</head>
	<body>
		<h1>WEBSITE AJENG LARAS</h1> <!--memberi judul website-->
		<hr>
		<div class="menu"> <!--class menu untuk diberi style-->
			<ul id="navigasi"> <!--class navigasi untuk diberi style-->
				<li><a href="index.php">Home</a></li> <!--button menu home-->
				<li><a href="index.php?m=profil">Profil</a></li> <!--button menu profil untuk redirect ke halaman profil-->
				<li><a href="#">Kuliah</a> 
					<ul>
						<li><a href="index.php?m=pendidikan">Pendidikan</a></li> <!--button menu pendidikan untuk redirect ke 
						halaman pendidikan-->
						<li><a href="index.php?m=kuliah">Kuliah</a></li> <!--button menu kuliah untuk redirect ke halaman kuliah-->
					</ul>
				</li>
				<li><a href="logout.php">Logout</a></li> <!--button menu logout untuk redirect kembali ke halaman beranda-->
			</ul>
		</div>
		<div class="content"> <!--class content untuk diberi style-->
			<?php
			//menampilkan content yang diinginkan
			$file = content($_GET['m']); //menampilkan content variabel m
			include "page/$file"; //termasuk halaman dan file
			?>
		</div>
	</body>
</html>