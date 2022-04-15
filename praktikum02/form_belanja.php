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
            <h1 class="m-0">Praktikum 02 - Form Belanja</h1>
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
                <div class="row">
                <div class="col-md-8">
                    <div class="mt-4">
                        <div class="">
                            <form method="POST" action="">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Customer</label> 
                                    <div class="col-8">
                                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="produk" class="col-4 form-label">Pilih Produk</label> 
                                    <div class="col-8">
                                        <input type="radio" class="mx-2" name="produk" value="TV"> TV<br>    
                                        <input type="radio" class="mx-2" name="produk" value="KULKAS"> KULKAS<br>
                                        <input type="radio" class="mx-2" name="produk" value="MESIN CUCI"> MESIN CUCI
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                                    <div class="col-8">
                                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Checkout</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-4">
                        <div class="card-header bg-primary text-white">
                            Daftar Harga
                        </div>
                        <div class="card-body">
                            <p>TV : 4.200.000</p>  
                            <hr> 
                            <p>KULKAS : 3.100.000</p>  
                            <hr> 
                            <p>MESIN CUCI : 3.800.000</p>
                        </div>
                        <div class="card-footer bg-primary text-white">
                            Harga dapat berubah setiap saat
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jumlah_produk = $_POST['jumlah'];   
                
                $harga_produk = 0;
                //cek, produk manakah yang dipilih
                if($produk == 'TV'){
                    $harga_produk = 4200000;
                }elseif($produk == 'KULKAS'){
                    $harga_produk = 3100000;
                } else {
                    $harga_produk = 3800000;
                }
                
                //menghitung total
                $total = $harga_produk * $jumlah_produk;
            ?>
            <div class="card shadow mt-4">
                <div class="card-body">
                    <p>Customer : <?= $customer; ?></p>
                    <p>Produk : <?= $produk; ?></p>
                    <p>Jumlah Produk : <?= $jumlah_produk; ?></p>
                    <p>Harga Produk : <?= $harga_produk; ?></p>
                    <p>Total : <?= $total; ?></p>
                </div>
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