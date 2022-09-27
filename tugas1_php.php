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
    <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
            <div class="mb-3">
                <label class="form-label" for="namaPegawai">Nama Pegawai</label>
                <input class="form-control" id="namaPegawai" name="nama" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="agama">Agama</label>
                <select class="form-select" id="agama" aria-label="Agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" data-sb-validations="" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" data-sb-validations="" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kabag" data-sb-validations="" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" data-sb-validations="" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" data-sb-validations="" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belum" type="radio" name="status" value="Belum" data-sb-validations="" />
                    <label class="form-check-label" for="belum">Belum</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
                <input class="form-control" id="jumlahAnak" name="jml_anak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
            </div>
            <!-- <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div> -->
            <div class="d-grid">
                <button class="btn btn-dark btn-lg" id="submitButton" name="proses" type="submit">Simpan</button>
            </div>
        </form>

        <?php 
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $jml_anak = $_POST['jml_anak'];
            $tombol = $_POST['proses'];

            switch ($jabatan) {
                case 'Manager':
                    $gapok = 20000000;
                    break;
                case 'Asisten':
                    $gapok = 15000000;
                    break;
                case 'Kabag':
                    $gapok = 10000000;
                    break;
                case 'Staff':
                    $gapok = 4000000;
                    break;
                default:
                    $gapok = 0;
                    break;
            };

            $tunjab = 20 / 100 * $gapok;

            if ($status === "Menikah" && $jml_anak <= 2) {
                $tunkel = 5 / 100 * $gapok;
            }
            elseif ($status === "Menikah" && $jml_anak >= 3 && $jml_anak <= 5) {
                $tunkel = 10 / 100 * $gapok;
            }
            elseif ($status === "Menikah" && $jml_anak >= 6 ) {
                $tunkel = 15 / 100 * $gapok; 
            }
            else {
                $tunkel = 0;
            }

            $gator = $gapok + $tunjab + $tunkel;
            $zaprof = $agama === "Islam" && $gator >= 6000000 ? 2.5 / 100 * $gator : 0;
            $thp = $gator - $zaprof;


            if(isset($tombol)){ 
        ?>
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nama Pegawai</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jumlah Anak</th>
                            <th scope="col">Gaji Pokok</th>
                            <th scope="col">Tunjangan Jabatan</th>
                            <th scope="col">Tunjuangan Keluarga</th>
                            <th scope="col">Gaji Kotor</th>
                            <th scope="col">Zakat Profesi</th>
                            <th scope="col">THP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start"><?php echo $nama; ?></td>
                            <td><?php echo $agama; ?></td>            
                            <td><?php echo $jabatan; ?></td>            
                            <td><?php echo $status; ?></td>            
                            <td><?php echo $jml_anak; ?></td>            
                            <td><?php echo 'Rp. ' . number_format($gapok); ?></td>            
                            <td><?php echo 'Rp. ' . number_format($tunjab); ?></td>            
                            <td><?php echo 'Rp. ' . number_format($tunkel); ?></td>            
                            <td><?php echo 'Rp. ' . number_format($gator); ?></td>            
                            <td><?php echo 'Rp. ' . number_format($zaprof); ?></td>            
                            <td><?php echo 'Rp. ' . number_format($thp); ?></td>
                        </tr>            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } ?>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>