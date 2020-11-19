<?php
    session_start();
       error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  error_reporting(E_ERROR);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="node_modules\@fortawesome\fontawesome-free\css\all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="container kotak">
        <a href="index.php" class="main-menu"><i class="fas fa-arrow-left mr-2"></i>Main Menu</a>
        <h1 class="text-center">
            Program Hitung Luas Segitiga
        </h1>
        <div class="hasil">
            <h1>Hasil : </h1>
            <h1 id="hasil"><?= ($_SESSION['segitiga'] == null ? 'Tolong Masukkan value' : $_SESSION['segitiga'] ) ;?></h1>
        </div>
        <form action="perhitungan.php?aksi=segitiga" class="mt-4" method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-ruler-vertical mr-1"></i>Alas</span>
            </div>
            
            <input type="number" class="form-control" placeholder="Alas" aria-label="Username"
                aria-describedby="basic-addon1"  id="alas" name="alas">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-ruler-vertical mr-1"></i>Tinggi</span>
            </div>
            
            <input type="number" class="form-control" placeholder="Tinggi" aria-label="Username"
                aria-describedby="basic-addon1"  id="tinggi" name="tinggi">
        </div>
       
        <button type="submit" class="btn btn-outline-primary" id="button-segitiga" >Hitung...</button>
    </form>


    <script src="node_modules\jquery\dist\jquery.js"></script>
    <script src="node_modules\@fortawesome\fontawesome-free\js\all.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <!-- <script src="script3.js"></script> -->
</body>

</html>