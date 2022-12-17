<?php
	
	include '../connection.php';

	if (isset($_POST['submit'])) {

		$id_semester = mysqli_real_escape_string($conn,stripcslashes($_POST['id_semester']));
		$id_matkul = mysqli_real_escape_string($conn,stripcslashes($_POST['id_matkul']));
		$judul = mysqli_real_escape_string($conn,stripcslashes($_POST['judul']));
		$kontributor = mysqli_real_escape_string($conn,stripcslashes($_POST['kontributor']));
		$link = mysqli_real_escape_string($conn,stripcslashes($_POST['link']));

		$query = "INSERT INTO `video` (`id_semester`,`id_matkul`,`judul`,`kontributor`,`link`) VALUES ('".$id_semester."', '".$id_matkul."','".$judul."', '".$kontributor."', '".$link."')";
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
	<title>Tambah Video</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
		<form action="" method="post" enctype="multipart/form-data" id="usrform">
		<?php 
			include 'connection.php';
			$queryCat = "SELECT * FROM semester";
			$msqlCat = mysqli_query($conn, $queryCat);
			$msqlCat1 = mysqli_query($conn, $queryCat);
			$result = mysqli_fetch_assoc($msqlCat);

		 ?>
		<select name="id_semester" class="form-control">
			<?php while ($data = mysqli_fetch_assoc($msqlCat1)) {
				
				if ($data['id'] == $result['id']) { ?>
					<option selected="<?php echo $result['id']?>" value="<?php echo $data['id']?>">
						<?php echo $data['nama']?>
					</option>
				<?php } else { ?>

					<option value="<?php echo $data['id']?>">
						<?php echo $data['nama']?>
					</option>
				} 

			<?php } }?>
		</select>
        <?php 
			include 'connection.php';
			$queryCat = "SELECT * FROM mata_kuliah";
			$msqlCat = mysqli_query($conn, $queryCat);
			$msqlCat1 = mysqli_query($conn, $queryCat);
			$result = mysqli_fetch_assoc($msqlCat);

		 ?>
		<select name="id_matkul" class="form-control">
			<?php while ($data = mysqli_fetch_assoc($msqlCat1)) {
				
				if ($data['id'] == $result['id']) { ?>
					<option selected="<?php echo $result['id']?>" value="<?php echo $data['id']?>">
						<?php echo $data['nama_matakuliah']?>
					</option>
				<?php } else { ?>

					<option value="<?php echo $data['id']?>">
						<?php echo $data['nama_matakuliah']?>
					</option>
				} 

			<?php } }?>
		</select>
		<input type="text" name="judul" placeholder="Judul"></br>
		<input type="text" name="kontributor" placeholder="Kontributor"></br>
		<input type="text" name="link" placeholder="Link"></br>
		
		<input type="submit" name="submit">
	</form>
</body>
</html>