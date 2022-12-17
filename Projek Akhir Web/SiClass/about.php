<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        include_once 'header.php';
    ?>
<section class="heading">
    <h3>Tentang Kami</h3>
    <p> <a href="home.html">Beranda >></a> Tentang Kami </p>
</section>
<section class="about">
    <div class="image">
        <img src="images/tentang.jpg" alt="">
    </div>
    <div class="content">
        <h3>Kami akan selalu menemanimu sampai wisuda</h3>
        <p>SiClass hadir untuk menyediakan video rekaman ulang perkuliahan bagi para anggotanya, sehingga mereka bisa mengulang kembali materi pembelajaran dan mendapatkan nilai terbaik</p>
        <a href="list_matkul.php?id_semester=5" class="btn">Selengkapnya</a>
    </div>
</section>
    <?php 
        include_once 'footer.php';
    ?>
<script src="js/script.js"></script>
</body>
</html>