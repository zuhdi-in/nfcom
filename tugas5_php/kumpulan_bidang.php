<?php

require_once "class_Lingkaran.php";
require_once "class_Persegipanjang.php";
require_once "class_Segitiga.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Luas dan Keliling Bidang</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Luas dan Keliling Bidang</h1>
        <table class="table text-center table-bordered mt-5">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Bidang</th>
                    <th>Keterangan</th>
                    <th>Luas Bidang</th>
                    <th>Keliling Bidang</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $l1 = new Lingkaran(10);
                    $pp1 = new Persegipanjang(5,3);                    
                    $s1 = new Segitiga();

                    echo '<tr><td>1</td>';
                    echo '<td>'. $l1->namaBidang() .'</td>';
                    echo '<td>Jari Jari = 10</td>';
                    echo '<td>'. $l1->getLuas() .'</td>';
                    echo '<td>'. $l1->getKeliling() .'</td></tr>';
                    echo '<tr><td>2</td>';
                    echo '<td>'. $pp1->namaBidang() .'</td>';
                    echo '<td>Panjang = 5, Lebar = 3</td>';
                    echo '<td>'. $pp1->getLuas() .'</td>';
                    echo '<td>'. $pp1->getKeliling() .'</td></tr>';
                    echo '<tr><td>3</td>';
                    echo '<td>'. $s1->namaBidang() .'</td>';
                    echo '<td>Alas = 10, Tinggi = 2, Sisi1 = 10, Sisi2 = 15, Sisi3 = 25</td>';
                    echo '<td>'. $s1->getLuas(10,2) .'</td>';
                    echo '<td>'. $s1->getKeliling(10,10,10) .'</td></tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>