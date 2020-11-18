<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="node_modules\@fortawesome\fontawesome-free\css\all.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // untuk menghilangkan error
    // untuk menghilangkan error
  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  error_reporting(E_ERROR);
        function persegi(){
            if($_POST['lebar'] == ''){
                echo ('tolong isi value');
            }else{
                date_default_timezone_set("Asia/Makassar");

            $lebar =  $_POST['lebar'];
            $total = $lebar * $lebar;

            $data = file_get_contents('users.json');
            $data = json_decode($data, true);
            $add_arr = array(
                'tipe_operasi' => 'luas hitung persegi',
                'variable1' => $lebar,
                // 'variable2' => null,
                'total' => $total,
                'waktu' => date('d-m-y H:i:s')

            );
            $data[] = $add_arr;

            $data = json_encode($data);
            file_put_contents('users.json', $data);
     
            // echo $data;
            return $total; 
            header('location: lingkaran.php');
            }


        
        }


        if(isset($_POST['submit']))
    {
        persegi();
    } 

        
    ?>
    <div class="container kotak">
        <a href="index.php" class="main-menu"><i class="fas fa-arrow-left mr-2"></i>Main Menu</a>
        <h1 class="text-center">
            Program Hitung Luas Persegi
        </h1>
        <div class="hasil">
            <h1>Hasil : </h1>
            <h1 id="hasil"><?= persegi(); ?></h1>
        </div>
        <form action="" class="mt-4" method="POST">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-ruler-vertical mr-1"></i>Sisi</span>
            </div>
            
            <input type="number" class="form-control" placeholder="Sisi" aria-label="Username"
                aria-describedby="basic-addon1"  id="sisi" name="lebar">
        </div>
       
        <button type="submit" class="btn btn-outline-primary" id="button-persegi" >Hitung...</button>
    </form>
    </div>
    




    <script src="node_modules\jquery\dist\jquery.js"></script>
    <script src="node_modules\@fortawesome\fontawesome-free\js\all.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="script.js"></script>
</body>

</html>