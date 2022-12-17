<?php 
    require_once 'connection.php';
    $sql = "SELECT * FROM mata_kuliah WHERE id_semester = 5 OR id_semester =4";
    $anggota = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once 'header.php';?>
<section class="home">

    <div class="image">
        <img src="images/home_vs.jpg" alt="">
    </div>

    <div class="content">
        <h3>Nonton Ulang kuliah kamu di SiClass</h3>
        <p>Dosen terlalu cepat menjelaskan dan sering ketinggalan materi kuliah kamu? Sekarang kamu bisa nonton ulang semua materi kuliah kamu di SiClass tanpa perlu login. Yuk, Cek sekarang! </p>
    </div>
</section>


<section class="category">
    <?php 
        while($row = mysqli_fetch_assoc($anggota) ){
    ?>
        <a href="list_video.php?id_matkul=<?php echo $row["id"]?>&id_semester=<?php echo $row["id_semester"]?>" class="box">
            <img src="<?php echo $row["icon"]?>" alt="">
            <h3><?php echo $row["nama_matakuliah"]?></h3>
        </a>
    <?php } ?>
    </section>
    

    <?php 
        include_once 'footer.php';
    ?>

<script src="js/script.js"></script>

</body>
</html>