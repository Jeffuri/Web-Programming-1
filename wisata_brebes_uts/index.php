<!DOCTYPE html>
<html>
<head>
	<title>Wisata_Brebes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul"> TEMPAT WISATA BREBES </h1>
		<h3 class="deskripsi">kami memberikan informasi tempat-tempat wisata yang ada di brebes</h3>
		<a href="halaman_login.php" style="margin:auto; text-align:right; display:block; color:black;" class="content">
		<li>Login Admin</li></a>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">Beranda</a></li>
			<li><a href="index.php?page=wisata">Daftar Wisata</a></li>
			<li><a href="index.php?page=lokasi">Lokasi</a></li>
		</ul>
	</div>
 
	<div class="badan"> 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'wisata':
				include "halaman/wisata.php";
				break;
			case 'lokasi':
				include "halaman/lokasi.php";
				break;
			case 'halaman_login':
				include "halaman_login.php";
				break;

			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>

</div>
</body>
</html>