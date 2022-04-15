<?php
require_once 'class_dispenser.php';

class Sirup extends Dispenser 
{
    protected $dompet;
    function __construct($namaMinuman,$volumeGelas,$harga)
    {
        $this->namaMinuman = $namaMinuman;
        $this->hargaSegelas = $harga;
        $this->volumeGelas = $volumeGelas;
    }

    function bayar($duit)
    {
        $this->dompet = $duit;
        return $this->dompet = $this->dompet - $this->hargaSegelas;
    }

    function volumeSetelahDijual()
    {
        return $this->volume = $this->volume - $this->volumeGelas;
    }

    function cetak()
    {
        echo '<h4>Kamu beli Sirup '.$this->namaMinuman.' yang harganya '.$this->hargaSegelas."</h4>";
        echo '<h4>Volume asli dispenser sirup adalah '.$this->volume."<h4>";
        echo '<h4>Volume Dispenser setelah dibeli : '.$this->volumeSetelahDijual()."</h4>";
        echo '<h4>Sisa uang mu adalah : '.$this->bayar(2000)."</h4>";
    }
}
$sirup = new Sirup('Mardjan',250,500);
$sirup->bayar(2000);
$sirup->isi(1000);
?>

  <!DOCTYPE html>
  <html lang="en">
  <!-- head -->
  <?php include_once '../layout/header-inside.php';?>

  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include_once '../layout/navbar.php';?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once '../layout/sidebar-inside.php';?>
    <!-- /.Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Praktikum 05 - Data Dispenser</h1>
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
                <?php $sirup->cetak(); ?>
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
  <?php include_once '../layout/script-inside.php';?>
  </body>
  </html>
