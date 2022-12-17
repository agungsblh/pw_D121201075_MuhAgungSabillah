<?php
	
	include '../connection.php';

	if ($_GET['id']) {

		$id = $_GET['id'];
		$query = "SELECT * FROM video WHERE id = '".$id."'";

		$msql = mysqli_query($conn, $query);

		$row = mysqli_fetch_assoc($msql);

		if (isset($_POST['submit'])) {
			

            $id_semester = mysqli_real_escape_string($conn,stripcslashes($_POST['id_semester']));
			$id_matkul = mysqli_real_escape_string($conn,stripcslashes($_POST['id_matkul']));
			$judul = mysqli_real_escape_string($conn,stripcslashes($_POST['judul']));
			$kontributor = mysqli_real_escape_string($conn,stripcslashes($_POST['kontributor']));
			$link = mysqli_real_escape_string($conn,stripcslashes($_POST['link']));
            
				$queUpdate = "UPDATE `video` SET `id_semester`='".$id_semester."',`id_matkul`='".$id_matkul."',`judul`='".$judul."',`kontributor`='".$kontributor."',`link`='".$link."' WHERE id= '".$id."'";

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
	<title>Edit Video</title>
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
		<input type="text" placeholder="Judul"name="judul" value="<?php echo $row['judul']; ?>"></br>
		<input type="text" placeholder="kontributor"name="kontributor" value="<?php echo $row['kontributor']; ?>"></br>
		<input type="text" placeholder="link"name="link" value="<?php echo $row['link']; ?>"></br>
		<input type="submit" name="submit">
	</form>
</body>
</html>