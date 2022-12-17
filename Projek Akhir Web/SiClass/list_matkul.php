<?php
    require_once 'connection.php';
    $id = $_GET['id_semester'];
    $sql = "SELECT * FROM mata_kuliah WHERE id_semester = $id";
    $sql2 = "SELECT `nama` FROM semester WHERE id = $id";
    $matkul = $conn->query($sql);
    $semester = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        while ($row = mysqli_fetch_assoc($semester)) {
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row["nama"] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
        include_once 'header.php';
    ?>

<section class="heading">
    <h3><?php echo $row["nama"] ?></h3>
    <p> <a href="home.php">beranda ></a> <?php echo $row["nama"] ?></p>
</section>
<?php }?>
<section class="course-1">
    <?php 
        while($row = mysqli_fetch_assoc($matkul) ){
    ?>
    <div class="box">
        <img src="<?php echo $row["icon"]?>" alt="">
        <h3><?php echo $row["nama_matakuliah"]?></h3>
        <p><?php echo $row["deskripsi"]?></p>
        <a href="list_video.php?id_matkul=<?php echo $row["id"]?>&id_semester=<?php echo $id?>" class="btn">Selengkapnya</a>
    </div>
    <?php } ?>
</section>

<script src="js/script.js"></script>

</body>
</html>