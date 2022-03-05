<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Form Belanja</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">
                        Sistem Penilaian
                    </div>
                    <div class="card-body shadow">
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
                                    <input type="checkbox" class="mx-2" name="produk[]" value="TV"> TV<br>    
                                    <input type="checkbox" class="mx-2" name="produk[]" value="KULKAS"> KULKAS<br>
                                    <input type="checkbox" class="mx-2" name="produk[]" value="MESIN CUCI"> MESIN CUCI
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
            @$customer = $_POST['customer'];
            @$produk = $_POST['produk'];
            @$jumlah = $_POST['jumlah'];                    
        ?>
        <div class="card shadow mt-4">
            <div class="card-body">
                <p>Customer : <?= $customer; ?></p>
                <p>Produk : <?php foreach ($produk as $p) { echo '<br> - '.$p; } ?></p>
                <p>Jumlah Produk : <?= $jumlah; ?></p>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/bootstrap.min.js"></script>
</html>