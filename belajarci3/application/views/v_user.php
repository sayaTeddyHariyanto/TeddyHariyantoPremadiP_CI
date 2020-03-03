<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1"> <!--membuat tabel dengan border 1-->
		<tr>
			<th>Nama</th> <!--kolom nama-->
			<th>Alamat</th> <!--kolom alamat-->
			<th>Pekerjaan</th> <!--kolom pekerjaan-->
		</tr>
		<?php foreach($user as $u){ ?> <!--menampilkan data menggunakan foreach $user sebagai $u-->
		<tr>
			<td><?php echo $u->nama ?></td> <!--menampilkan data nama sebanyak nama didatabase berdasar foreach diatas-->
			<td><?php echo $u->alamat ?></td> <!--menampilkan data alamat sebanyak alamat didatabase berdasar foreach diatas-->
			<td><?php echo $u->pekerjaan ?></td> <!--menampilkan data pekerjaan sebanyak pekerjaan didatabase berdasar foreach diatas-->
		</tr>
		<?php } ?>
	</table>
</body>
</html>