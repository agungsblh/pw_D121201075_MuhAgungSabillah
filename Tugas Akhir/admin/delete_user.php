<?php
	include '../connection.php';
		if (isset($_GET['id_del'])) {
			$iddel = $_GET['id_del'];

			$del = "DELETE FROM `anggota` WHERE id = '".$iddel."'";
			$img = "SELECT * FROM `anggota` WHERE id = '".$iddel."'";
			$ambil = mysqli_query($conn, $img);
			$dataimg = mysqli_fetch_assoc($ambil);

			if ($dataimg['foto']!="") {
				unlink('../'.$dataimg['foto']);
			}

			$msql = mysqli_query($conn, $del);
            ?>
			<script type="text/javascript">
				window.location = 'admin_panel.php';
			</script>
		<?php
		}
?>