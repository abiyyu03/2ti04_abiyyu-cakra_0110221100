<?php 
require_once 'class_mahasiswa.php';

$mahasiswa1 = new Mahasiswa('Faiz Fikri','02011');
$mahasiswa1->prodi = "TI";
$mahasiswa1->thn_angkatan = "2012";
$mahasiswa1->ipk = 3.8;
$mahasiswa1->predikat_ipk = $mahasiswa1->predikat_ipk();

$mahasiswa2 = new Mahasiswa('Alissa Khairunnisa','02012');
$mahasiswa2->prodi = "TI";
$mahasiswa2->thn_angkatan = "2012";
$mahasiswa2->ipk = 3.9;
$mahasiswa2->predikat_ipk = $mahasiswa2->predikat_ipk();

$mahasiswa3 = new Mahasiswa('Rosalie Naurah','01011');
$mahasiswa3->prodi = "SI";
$mahasiswa3->thn_angkatan = "2010";
$mahasiswa3->ipk = 3.46;
$mahasiswa3->predikat_ipk = $mahasiswa3->predikat_ipk();

$mahasiswa4 = new Mahasiswa('Defghi Muhammad','01012');
$mahasiswa4->prodi = "SI";
$mahasiswa4->thn_angkatan = "2010";
$mahasiswa4->ipk = 3.2;
$mahasiswa4->predikat_ipk = $mahasiswa4->predikat_ipk();

$array = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];
$arr = json_decode(json_encode($array),true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/datatables/datatables.min.css">
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
                    <li class="form-inline my-2 my-lg-0">Login</li>
                    <li class="nav-item dropdown form-inline my-2 my-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </div>
            </nav>
        </div>
        <div class="table-responsive mt-4">
            <table class="table table-border" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Tahun Angkatan</th>
                        <th>IPK</th>
                        <th>predikat</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach($arr as $a) :?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nim'];?></td>
                        <td><?= $a['nama'];?></td>
                        <td><?= $a['prodi'];?></td>
                        <td><?= $a['thn_angkatan'];?></td>
                        <td><?= $a['ipk'];?></td>
                        <td><?= $a['predikat_ipk'];?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
        <div class="footer card-footer p-3 mt-3" style="position:fixed;bottom:0;width:100%">
            <p class="font-weight-bold">Lab Pemrograman Web Lanjutan</p>
            <p>Dosen : Sirojul Munir S.Si, M.Kom</p>
            <p>STT NF - Kampus B </p> 
        </div>
</body>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/datatables/datatables.min.js"></script>
<script src="../assets/datatables/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
<script src="../assets/js/bootstrap.min.js"></script>
</html>