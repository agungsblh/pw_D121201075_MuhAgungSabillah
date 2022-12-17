<?php
	
	include '../connection.php';

	if ($_GET['id']) {

		$id = $_GET['id'];
		$query = "SELECT * FROM anggota WHERE id = '".$id."'";

		$msql = mysqli_query($conn, $query);

		$row = mysqli_fetch_assoc($msql);

		if (isset($_POST['submit'])) {
			

            $nama = mysqli_real_escape_string($conn,stripcslashes($_POST['nama']));
			$nim = mysqli_real_escape_string($conn,stripcslashes($_POST['nim']));
			$ig = mysqli_real_escape_string($conn,stripcslashes($_POST['ig']));
			$linkedin = mysqli_real_escape_string($conn,stripcslashes($_POST['linkedin']));
			$twitter = mysqli_real_escape_string($conn,stripcslashes($_POST['twitter']));
			$fb = mysqli_real_escape_string($conn,stripcslashes($_POST['fb']));

            
			
				$queUpdate = "UPDATE `anggota` SET `nama`='".$nama."',`nim`='".$nim."',`ig`='".$ig."',`linkedin`='".$linkedin."',`twitter`='".$twitter."',`fb`='".$fb."' WHERE id= '".$id."'";

				mysqli_query($conn, $queUpdate);
				?>
					<script type="text/javascript">
						window.location = 'admin_panel.php';
					</script>
				<?php



		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Anggota</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data" id="usrform">
		<input type="text" placeholder="Nama"name="nama" value="<?php echo $row['nama']; ?>"></br>
		<input type="text" placeholder="NIM"name="nim" value="<?php echo $row['nim']; ?>"></br>
		<input type="text" placeholder="ig"name="ig" value="<?php echo $row['ig']; ?>"></br>
		<input type="text" placeholder="linkedin"name="linkedin" value="<?php echo $row['linkedin']; ?>"></br>
		<input type="text" placeholder="twitter"name="twitter" value="<?php echo $row['twitter']; ?>"></br>
        <input type="text" placeholder="fb"name="fb" value="<?php echo $row['fb']; ?>"></br>
		<input type="submit" name="submit">
	</form>
</body>
</html>