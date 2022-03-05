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
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
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
</body>
<script src="assets/js/bootstrap.min.js"></script>
</html>
