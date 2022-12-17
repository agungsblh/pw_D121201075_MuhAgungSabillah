<?php
	
	include '../connection.php';

	if (isset($_POST['submit'])) {

		$photo_tmp = $_FILES['foto']['tmp_name'];
		$photo = "images/anggota/".$_FILES['foto']['name'];
		$nama = mysqli_real_escape_string($conn,stripcslashes($_POST['nama']));
		$nim = mysqli_real_escape_string($conn,stripcslashes($_POST['nim']));
		$ig = mysqli_real_escape_string($conn,stripcslashes($_POST['ig']));
		$linkedin = mysqli_real_escape_string($conn,stripcslashes($_POST['linkedin']));
		$twitter = mysqli_real_escape_string($conn,stripcslashes($_POST['twitter']));
		$fb = mysqli_real_escape_string($conn,stripcslashes($_POST['fb']));


		$query = "INSERT INTO `anggota` (`nama`,`nim`,`ig`,`linkedin`,`twitter`,`fb`,`foto`) VALUES ('".$nama."', '".$nim."','".$ig."', '".$linkedin."', '".$twitter."', '".$fb."', '".$photo."')";

		move_uploaded_file($photo_tmp, "../".$photo);

		mysqli_query($conn, $query);


		?>
			<script type="text/javascript">
				window.location = 'admin_panel.php';
			</script>
		<?php

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Anggota</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
		<form action="" method="post" enctype="multipart/form-data" id="usrform">
		<input type="file" name="foto" accept="image/*"></br>
		<input type="text" name="nama" placeholder="Nama"></br>
		<input type="text" name="nim" placeholder="NIM"></br>
		<input type="text" name="ig" placeholder="Instagram"></br>
		<input type="text" name="lingkedin" placeholder="lingkedin"></br>
		<input type="text" name="twitter" placeholder="Twitter"></br>
		<input type="text" name="fb" placeholder="Facebook"></br>
		
		<input type="submit" name="submit">
	</form>
</body>
</html>