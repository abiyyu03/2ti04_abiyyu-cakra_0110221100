<?php
require_once 'account.php';
class Account_bank extends Account
{
    protected $customer;
    function __construct($no,$saldo,$customer)
    {
        parent::__construct($no,$saldo);
        $this->customer = $customer;
    }

    function transfer($uang)
    {
        $account = new Account();
        $account->deposit($uang);
        $this->withdraw($uang);
    }
    function cetak()
    {
        echo '<h3>Nama : '.$this->customer.'</h3>';
        parent::cetak();
    }
}
$obj = new Account_bank('C001',6000000,'Ahmad');
$obj->deposit(1000000);
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
              <h1 class="m-0">Praktikum 05 - Akun Bank</h1>
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
                <?php $obj->cetak(); ?>
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
