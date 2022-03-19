<?php
class NilaiMahasiswa
{
    public $mata_kuliah, $nim, $nilai;
    function __construct($mata_kuliah,$nilai,$nim)
    {
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade()
    {
        if($this->nilai < 56)
        {
            return 'Tidak Lulus';
        } else {
            return 'Lulus';
        }
    }
    function hasil()
    {
        if($this->nilai >= 0 && $this->nilai <= 35)
        {
            return 'E';
        } elseif($this->nilai >= 36 && $this->nilai <= 55) {
            return 'D';
        }elseif($this->nilai >= 56 && $this->nilai <= 69) {
            return 'C';
        }elseif($this->nilai >= 70 && $this->nilai <= 84) {
            return 'B';
        }elseif($this->nilai >= 85 && $this->nilai <= 100) {
            return 'A';
        }

    }
}
if(isset($_POST['submit']))
{
    $nilai_mahasiswa = new NilaiMahasiswa($_POST['mata_kuliah'],$_POST['nilai'],$_POST['nim']);
    $result = json_decode(json_encode($nilai_mahasiswa),true);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">WEB02</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Review PHP
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            PHP5 OOP
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <form action="" method="post">
            <div class="card-header mt-4">
                <h3>Form Nilai Ujian</h3>
            </div>
            <div class="form-group mt-4">
                <label for="nim">NIM</label>
                <input type="text" class="form-control mb-3" name="nim">
            </div>
            <div class="form-group mt-4">
                <label for="nim">Mata Kuliah</label>
                <select name="mata_kuliah" id="" class="form-control mb-3">
                    <option>-</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="nim">Nilai</label>
                <input type="number"class="form-control mb-3"  name="nilai">
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </div>
        </form>
        <hr>
        <div class="mt-4">
            <p>NIM : <?= (isset($_POST['submit'])) ? $result['nim'] : '';?></p>
            <p>Mata Kuliah : <?= (isset($_POST['submit'])) ? $result['mata_kuliah'] : '';?></p>
            <p>Nilai : <?= (isset($_POST['submit'])) ? $result['nilai'] : '';?></p>
            <p>Hasil Ujian : <?= (isset($_POST['submit'])) ? $nilai_mahasiswa->hasil() : '';?></p>
            <p>Grade : <?= (isset($_POST['submit'])) ? $nilai_mahasiswa->grade() : '';?></p>
        </div>
    </div>
<div class="footer card-footer p-3 mt-3" style="position:fixed;bottom:0;width:100%">
    <p class="font-weight-bold">Lab Pemrograman Web Lanjutan</p>
    <p>Dosen : Sirojul Munir S.Si, M.Kom</p>
    <p>STT NF - Kampus B </p> 
</div>
</body>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</html>