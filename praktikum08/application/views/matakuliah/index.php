<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<table border=1 cellpadding=10 cellspacing=0>
  <thead>
      <tr>
          <th>#</th>
          <th>Kode</th>
          <th>Nama Mata Kuliah</th>
          <th>SKS</th>
      </tr>
  </thead>
  <tbody>
      <?php $nomor = 1; foreach($list_mtkl as $mtkl) :?>
      <tr>
          <td><?= $nomor++; ?></td>
          <td><?= $mtkl->kode; ?></td>
          <td><?= $mtkl->nama_matkul ; ?></td>
          <td><?= $mtkl->sks ; ?></td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>  
</body>
</html>
          