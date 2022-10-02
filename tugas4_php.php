<?php
    class Pegawai {

        public $nip;
        public $nama;
        public $jabatan;
        public $agama;
        public $status;
        
        public function __construct($nip, $nama, $jabatan, $agama, $status) 
        {
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
        }

        public function setGajiPokok()
        {
            switch ($this->jabatan) {
                case 'Manager':
                    $gapok = 15000000;
                    break;
                case 'Asisten Manager':
                    $gapok = 10000000;
                    break;
                case 'Kepala Bagian':
                    $gapok = 7000000;
                    break;
                case 'Staff':
                    $gapok = 4000000;
                    break;
                default:
                    $gapok = 0;
            }
            return $gapok;
        }

        public function setTunjab()
        {
            $tunjab = $this->setGajiPokok() * 0.2;
            return $tunjab;
        }

        public function setTunkel()
        {
            $tunkel = ($this->status == 'Menikah') ? 0.1 * $this->setGajiPokok() : 0;
            return $tunkel;
        }

        public function setGajiKotor(Type $var = null)
        {
            $gator = $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel();
            return $gator;
        }

        public function setZakatProfesi()
        {
            $zaprof = ($this->agama == 'Islam' && $this->setGajiKotor() > 6000000) ? 0.025 * $this->setGajiKotor() : 0;
            return $zaprof;
        }

        public function setGajiBersih()
        {
            $gasih = $this->setGajiKotor() - $this->setZakatProfesi();
            return $gasih;
        }

        public function mencetak()
        {
            echo '<tr><td>'.$this->nip. '</td>';
            echo '<td>'. $this->nama. '</td>';
            echo '<td>'.$this->jabatan.'</td>';
            echo '<td>'.$this->agama.'</td>';
            echo '<td>'.$this->status.'</td>';
            echo '<td>'.number_format($this->setGajiPokok()).'</td>';
            echo '<td>'.number_format($this->setTunjab()).'</td>';
            echo '<td>'.number_format($this->setTunkel()).'</td>';
            echo '<td>'.number_format($this->setZakatProfesi()).'</td>';
            echo '<td>'.number_format($this->setGajiBersih()).'</td></tr>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Gaji Pegawai</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Gaji Pegawai</h1>
        <table class="table text-center table-bordered mt-5">
            <thead class="table-dark">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Jabatan</th>
                    <th>Tunjangan Keluarga</th>
                    <th>Zakat</th>
                    <th>Gaji Bersih</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $p1 = new Pegawai('1124955', 'Kurniawan', 'Staff', 'Kristen', 'Belum Menikah');
                    $p2 = new Pegawai('1185304', 'Kusnadi', 'Manager', 'Kristen', 'Menikah');
                    $p3 = new Pegawai('1153294', 'Ratih', 'Asisten Manager', 'Islam', 'Menikah');
                    $p4 = new Pegawai('1195383', 'Mimin', 'Kepala Bagian', 'Islam', 'Menikah');
                    $p5 = new Pegawai('1134857', 'Syaiful', 'Staff', 'Islam', 'Belum Menikah');

                    $arr_pegawai = [$p1, $p2, $p3, $p4, $p5];

                    foreach ($arr_pegawai as $pegawai) 
                    {
                        $pegawai -> mencetak();
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>