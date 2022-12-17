<?php
	include '../connection.php';
		if (isset($_GET['id_del'])) {
			$iddel = $_GET['id_del'];

			$del = "DELETE FROM `video` WHERE id = '".$iddel."'";

			$msql = mysqli_query($conn, $del);
            ?>
			<script type="text/javascript">
				window.location = 'admin_panel.php';
			</script>
		<?php
		}
?>