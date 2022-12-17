<?php
	require_once '../connection.php';
	$sql = "SELECT * FROM anggota";
    $anggota = $conn->query($sql);
	$sql2 = "SELECT * FROM video";
    $video = mysqli_query($conn, $sql2);
	$sql3 = "SELECT * FROM mata_kuliah";
    $matkul = mysqli_query($conn, $sql3);
	$sql4 = "SELECT video.*, mata_kuliah.nama_matakuliah FROM video LEFT JOIN mata_kuliah ON video.id_matkul=mata_kuliah.id";
	$list_vid = mysqli_query($conn, $sql4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	<title>SiClass Admin</title>
</head>
<body>
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">SiClass Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
		</ul>
	</section>
	<section id="content">
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
		</nav>
		<main>
			<ul class="box-info">
				<li>
					<i class='bx bx-slideshow' ></i>
					<span class="text">
						<h3><?php echo mysqli_num_rows($video) ?></h3>
						<p>Video</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo mysqli_num_rows($anggota) ?></h3>
						<p>Anggota</p>
					</span>
				</li>
				<li>
					<i class='bx bx-file-blank' ></i>
					<span class="text">
						<h3><?php echo mysqli_num_rows($matkul) ?></h3>
						<p>Mata kuliah</p>
					</span>
				</li>
			</ul>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Anggota</h3>
						<a href="add_anggota.php"><i class='bx bx-plus' ></i></a>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nama</th>
								<th>Nim</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
                        while ($row = mysqli_fetch_assoc($anggota)) {
                        ?>
							<tr>
								<td>
									<img src="../<?php echo $row["foto"]?>">
									<p><?php echo $row["nama"]?></p>
								</td>
								<td><?php echo $row["nim"]?></td>
								<td><a href="edituser.php?id=<?php echo $row["id"]?>" class="btn btn-primary">edit</a> | 
									<a href="delete_user.php?id_del=<?php echo $row["id"]?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus anggota ini?')">hapus</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="order">
					<div class="head">
						<h3>Video</h3>
						<a href="add_video.php"><i class='bx bx-plus' ></i></a>
					</div>
					<table>
						<thead>
							<tr>
								<th>Mata kuliah</th>
								<th>Judul</th>
							</tr>
						</thead>
						<tbody>
						<?php
                        while ($row = mysqli_fetch_assoc($list_vid)) {
                        ?>
							<tr>
								<td>
									<p><?php echo $row["nama_matakuliah"]?></p>
								</td>
								<td><?php echo $row["judul"]?></td>
								<td><a href="edit_video.php?id=<?php echo $row["id"]?>" class="btn btn-primary">edit</a> | 
									<a href="delete_video.php?id_del=<?php echo $row["id"]?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus video ini?')">hapus</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</main>
	</section>
	<script src="script.js"></script>
</body>
</html>