<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="node_modules\@fortawesome\fontawesome-free\css\all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center">Hasil Operasi</h1>
        <table class="table mt-5 table-striped" id="myTable">
            <thead>
                <tr class="font-weight-bold">
                    <td scope="col">Tipe Operasi</td>
                    <td scope="col">Input Value 1</td>
                    <td scope="col">Input Value 2</td>
                    <td scope="col">Total Hasil Operasi</td>
                    <td scope="col">Tanggal</td>
                </tr>   
            </thead>
            <tbody>
        <?php
        $data = file_get_contents('users.json');
        $data = json_decode($data);
        $index = 1;
        if(!empty($data)){
        foreach($data as $row){         
        ?>
        <tr>
            <td scope="row"><?php echo $row->tipe_operasi; ?></td>
            <td><?php echo $row->variable1; ?></td>
            <td><?php echo $row->variable2; ?></td>
            <td><?php echo $row->total; ?></td>
            <td><?php echo $row->waktu; ?></td>
        </tr>
        <?php
        $index++;
        }

        $count = 0;
        $countLingkaran = 0;
        $countPersegi = 0;
        $countSegitiga = 0;

        $max = PHP_INT_MIN;
        $min = PHP_INT_MAX;

        foreach($data as $row){
            $count++;

            $max = ($row->total > $max ? $row->total : $max);
            $min = ($row->total < $min ? $row->total : $min);

            if($row->tipe_operasi == 'Segitiga'){
                $countSegitiga++;
            }else if($row->tipe_operasi == 'Persegi'){
                $countPersegi++;

            }else if($row->tipe_operasi == 'Lingkaran'){
                $countLingkaran++;

            }
        }

        $perLingkaran = $countLingkaran / $count;
        $perPersegi = $countPersegi / $count;
        $perSegitiga = $countSegitiga / $count;


        echo '<div class="contain-flex">';
            echo '<div class="kiri">';
                echo '<h4 class="mb-5"> Jumlah Data : ' .count($data). ' </h4>';
                echo '<h4 class="mb-5"> Data Terkecil: ' .$min. ' </h4>';
                echo '<h4 class="mb-5"> Data Terbesar: ' .$max. ' </h4>';
            echo '</div>';

            echo '<div class="kanan">';
                echo '<h4 class="mb-5"> Persentase Lingkaran: ' .$perLingkaran * 100; '  %</h4>';
                echo '<h4 class="mb-5"> Persentase Persegi: ' .$perPersegi * 100; '  %</h4>';
                echo '<h4 class="mb-5"> Persentase Segitiga: ' .$perSegitiga * 100; ' %</h4>';
            echo '</div>';
        echo '</div>';


    }
    ?>
    </tbody>
   
    </table>

    </div>
    
    <script src="node_modules\jquery\dist\jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="node_modules\@fortawesome\fontawesome-free\js\all.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script src="script.js"></script>
    <script>
        
$(document).ready( function () {
    $('#myTable').DataTable({
        "order": [[ 4, "desc" ]]
    });
} );
    </script>
</body>

</html>