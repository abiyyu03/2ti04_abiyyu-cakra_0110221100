<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php require_once '../layout/header-inside.php';?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php require_once '../layout/navbar.php';?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require_once '../layout/sidebar-inside.php';?>
  <!-- /.Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Praktikum 04 - Data Persegi Panjang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <?php
                    require_once 'class_persegi_panjang.php';

                    $persegipanjang1 = new Persegi_panjang(10,4);
                    $persegipanjang2 = new Persegi_panjang(4,12);

                    echo "Nilai Panjang 1 : " . $persegipanjang1->getPanjang();
                    echo "<br>Nilai Lebar 1: " . $persegipanjang1->getLebar();
                    echo "<br>Nilai Panjang 2 : " . $persegipanjang2->getPanjang();
                    echo "<br>Nilai Lebar 2: " . $persegipanjang2->getLebar();

                    echo "<br><br>Luas Persegi Panjang I : ".$persegipanjang1->getLuas();
                    echo "<br>Luas Persegi Panjang II : ".$persegipanjang2->getLuas();
                    echo "<br>Keliling Persegi Panjang I : ".$persegipanjang1->getKeliling();
                    echo "<br>Keliling Persegi Panjang II : ".$persegipanjang2->getKeliling();
                ?>
            </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php require_once '../layout/script-inside.php';?>
</body>
</html>