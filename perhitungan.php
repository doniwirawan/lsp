<?php
	session_start();

	$aksi = $_GET['aksi'];
	if ($aksi == 'lingkaran') {
		$lingkaran = lingkaran($_POST['jari']);
		$_SESSION['lingkaran'] = $lingkaran;
		header('location:lingkaran.php');
	} else if ($aksi == 'persegi') {
		$persegi = persegi($_POST['sisi']);
		$_SESSION['persegi'] = $persegi;
		header('location:persegi.php');
	} else if ($aksi == 'segitiga') {
		$segitiga = segitiga($_POST['alas'], $_POST['tinggi']);
		$_SESSION['segitiga'] = $segitiga;
		header('location:segitiga.php');
	}
	
	function lingkaran($jari)
	{
		$phi = 3.14;
		$luas = $phi * $jari * $jari;

		store($jari, null, $luas, 'Lingkaran');
		return $luas;
	}
	
	function persegi($sisi)
	{
		$luas = $sisi * $sisi;

		store($sisi, null, $luas, 'Persegi');
		return $luas;
	}
	
	function segitiga($alas, $tinggi)
	{
		$luas = $alas * $tinggi / 2;

		store($alas, $tinggi, $luas, 'Segitiga');
		return $luas;
	}

	function store($var1, $var2, $hasil, $tipe)
	{
		date_default_timezone_set("Asia/Makassar");
        $data = file_get_contents('users.json');
        $data = json_decode($data, true);
        $add_arr = array(
            'tipe_operasi' => $tipe,
            'variable1' => $var1,
            'variable2' => $var2,
            'total' => $hasil,
            'waktu' => date('d-m-y H:i:s')

        );
        $data[] = $add_arr;

        $data = json_encode($data);
        file_put_contents('users.json', $data);
	}
?>