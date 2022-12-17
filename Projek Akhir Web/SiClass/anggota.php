<?php 
    require_once 'connection.php';
    $sql = "SELECT * FROM anggota";
    $anggota = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 
        include_once 'header.php';
    ?>

<section class="heading">
    <h3>Anggota Kelas C</h3>
    <p> <a href="home.php">Beranda >></a> Anggota </p>
</section>

<section class="teachers">
    <?php 
        while($row = mysqli_fetch_assoc($anggota) ){
    ?>
    <div class="box">
        <div class="image">
            <img src="<?php echo $row["foto"]?>" alt="">
            <div class="share">
                <a href="<?php echo $row["fb"]?> " target="_blank" class="fab fa-facebook-f"></a>
                <a href="<?php echo $row["twitter"]?>" target="_blank" class="fab fa-twitter"></a>
                <a href="<?php echo $row["ig"]?>" target="_blank" class="fab fa-instagram"></a>
                <a href="<?php echo $row["linkedin"]?>" target="_blank" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="content">
            <h3><?php echo $row["nama"]?></h3>
            <span><?php echo $row["nim"]?></span>
        </div>
    </div>
    <?php } ?>
</section>

<?php 
        include_once 'footer.php';
    ?>
<script src="js/script.js"></script>

</body>
</html>