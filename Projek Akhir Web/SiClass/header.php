<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">

        <a href="home.php" class="logo"> <i class="fas fa-graduation-cap"></i>SiClass</a>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <ul>
                <li><a href="home.php">Beranda</a></li>
                
                <li><a href="#">Kategori</a>
                    <ul>
                        <li><a href="list_matkul.php?id_semester=1">Semester 1</a></li>
                        <li><a href="list_matkul.php?id_semester=2">Semester 2</a></li>
                        <li><a href="list_matkul.php?id_semester=3">Semester 3</a></li>
                        <li><a href="list_matkul.php?id_semester=4">Semester 4</a></li>
                        <li><a href="list_matkul.php?id_semester=5">Semester 5</a></li>
                    </ul>
                </li>
                <li><a href="anggota.php">Anggota</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>