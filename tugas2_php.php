<?php 
    $arr_title = ['No','NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

    $m1 = ['nim'=>'0112153', 'name'=>'Supono', 'score'=> 57];
    $m2 = ['nim'=>'0023446', 'name'=>'Karyo', 'score'=> 88];
    $m3 = ['nim'=>'0058237', 'name'=>'Paul', 'score'=> 75];
    $m4 = ['nim'=>'0016742', 'name'=>'Karin', 'score'=> 96];
    $m5 = ['nim'=>'0023491', 'name'=>'Titin', 'score'=> 66];
    $m6 = ['nim'=>'0201443', 'name'=>'Dodi', 'score'=> 55];
    $m7 = ['nim'=>'0023494', 'name'=>'Karim', 'score'=> 73];
    $m8 = ['nim'=>'0023452', 'name'=>'Abdul', 'score'=> 69];
    $m9 = ['nim'=>'0040523', 'name'=>'Maman', 'score'=> 92];
    $m10 = ['nim'=>'0235023', 'name'=>'Tito', 'score'=> 83];

    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

    $total_mhs = count($mahasiswa);
    $jml_nilai = array_column($mahasiswa,'score');
    $highest_score = max($jml_nilai);
    $lowest_score = min($jml_nilai);
    $total_score = array_sum($jml_nilai);
    $avg_score = $total_score / $total_mhs;

    $arr_aggr = [
        'Nilai Tertinggi' => $highest_score,
        'Nilai Terendah' => $lowest_score,
        'Nilai Rata-rata' => $avg_score,
        'Jumlah Siswa' => $total_mhs
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table text-center table-bordered">
            <thead class="table-dark">
                <tr>
                    <?php 
                        foreach($arr_title as $title){
                    ?>
                    <th><?= $title ?></th>
                    <?php }; ?>
                </tr>
            </thead>
            <tbody>
                    <?php 
                        $no = 1;
                        foreach($mahasiswa as $mhs){
                            $keterangan =   $mhs['score'] >= 60 ? 'Lulus' : 'Tidak Lulus';

                            if($mhs['score'] >= 90) {
                                $grade = 'A';
                            }
                            elseif($mhs['score'] >= 80) {
                                $grade = 'B';
                            }
                            elseif($mhs['score'] >= 70) {
                                $grade = 'C';
                            }
                            elseif($mhs['score'] >= 60) {
                                $grade = 'D';
                            }
                            elseif($mhs['score'] >= 50) {
                                $grade = 'E';
                            }
                            else {
                                $grade = '';
                            }

                            switch ($grade) {
                                case 'A':
                                    $predikat = 'Sangat Memuaskan';
                                    break;
                                case 'B':
                                    $predikat = 'Memuaskan';
                                    break;
                                case 'C':
                                    $predikat = 'Kurang';
                                    break;
                                case 'D':
                                    $predikat = 'Buruk';
                                    break;
                                case 'E':
                                    $predikat = 'Sangat Buruk';
                                    break;
                                
                                default:
                                    $predikat = '';
                                    break;
                            }
                    ?>
                <tr>    
                    <td><?= $no ?></td>            
                    <td><?= $mhs['nim'] ?></td>                    
                    <td><?= $mhs['name'] ?></td>                    
                    <td><?= $mhs['score'] ?></td>                    
                    <td><?= $keterangan ?></td>                    
                    <td><?= $grade ?></td>                    
                    <td><?= $predikat ?></td>                                    
                </tr>
                    <?php $no++; }; ?>            
            </tbody>
            <tfoot>
                <?php foreach($arr_aggr as $aggr => $value) { ?>
                    <tr>
                        <th colspan="6" class="table-dark"><?php echo $aggr ?></th>
                        <td><?php echo $value ?></td>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
</body>
</html>