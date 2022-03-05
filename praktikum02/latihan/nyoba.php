<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="checkbox">
        <form action="" method="POST">
            <label for="">Memanah</label>
            <input type="checkbox" name="olahraga[]" id="" value="Memanah">Memanah
            <label for="">Berkuda</label>
            <input type="checkbox" name="olahraga[]" id="" value="Berkuda">Berkuda
            <label for="">Renang</label>
            <input type="checkbox" name="olahraga[]" id="" value="Renang">Renang
            <button type="submit">cetak</button>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['olahraga'])) {

    $olahraga = $_POST['olahraga'];

    foreach ($olahraga as $o) {
        echo 'olahraga kamu adalah :'.$o."<br>";
    }
}
?>