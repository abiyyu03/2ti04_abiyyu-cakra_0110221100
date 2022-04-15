  <?php
  $ns1 = [
    'id' => 1,
    'nim' => '01101',
    'uts' => 80,
    'uas' => 84,
    'tugas' => 78
  ];
  $ns2 = [
    'id' => 2,
    'nim' => '01121',
    'uts' => 70,
    'uas' => 50,
    'tugas' => 68
  ];
  $ns3 = [
    'id' => 3,
    'nim' => '01130',
    'uts' => 60,
    'uas' => 86,
    'tugas' => 70
  ];
  $ns4 = [
    'id' => 4,
    'nim' => '01134',
    'uts' => 90,
    'uas' => 91,
    'tugas' => 82
  ];

  $ar_nilai = [$ns1,$ns2,$ns3,$ns4];
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
              <h1 class="m-0">Praktikum 01 - Array Siswa</h1>
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
          <h3 class="text-center mt-4 mb-2">Daftar Nilai Siswa</h3>
          <table class="table table-border text-center ">
            <thead class="table-warning">
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 0;?>
              <?php foreach($ar_nilai as $nilai): ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $nilai['nim']; ?></td>
                <td><?= $nilai['uts']; ?></td>
                <td><?= $nilai['uas']; ?></td>
                <td><?= $nilai['tugas']; ?></td>
                <td><?= number_format((($nilai['uts']+$nilai['uas']+$nilai['tugas'])/3)); ?></td>
              </tr>
              <?php endforeach; ?>  
            </tbody>
          </table>
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

