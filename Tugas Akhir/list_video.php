<?php
    require_once 'connection.php';
    $id_matkul = $_GET['id_matkul'];
    $id_semester = $_GET['id_semester'];
    $sql = "SELECT * FROM video WHERE id_semester = $id_semester AND id_matkul=$id_matkul";
    $sql2 = "SELECT * FROM mata_kuliah WHERE id_semester = $id_semester AND id=$id_matkul";
    $matkul = $conn->query($sql);
    $judul = $conn->query($sql2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        while($row = mysqli_fetch_assoc($judul) ){
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row["nama_matakuliah"]?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <?php include_once 'header.php' ?>
    
    <section class="heading">
        <h3><?php echo $row["nama_matakuliah"]?></h3>
        <p> <a href="home.php">Beranda ></a> <a href="list_matkul.php?id_semester=<?php echo $row["id_semester"]?>">Semester <?php echo $row["id_semester"]?></a>><?php echo $row["nama_matakuliah"]?></p>
    </section>
    <?php } ?>
    
    <section class="course-3">
    <?php 
        while($row = mysqli_fetch_assoc($matkul) ){
    ?>
        <div class="box">
            <div class="video">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $row["link"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="content">
                <h3><?php echo $row["judul"]?></h3>
                <p>by <?php echo $row["kontributor"]?></p>
            </div>
        </div>
        <?php } ?>
    </section>
<script src="js/script.js"></script>

</body>
</html>