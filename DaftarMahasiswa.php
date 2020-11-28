<?php 
	include 'config.php';
	$queryMahasiswa = "SELECT * FROM tb_mahasiswa";
	$getQuery = mysqli_query($con, $queryMahasiswa);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<style type="text/css">
		a.button{
			appearance:button;
		}
	</style>
</head>
<body>
	<form action="insert.php" method="POST">
		<input type="number" name="nim" placeholder="nim">
		<input type="text" name="nama_mhs" placeholder="Nama">
		<input type="text" name="tmpt_lahir" placeholder="Tempat Lahir">
		<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir">
		<input type="text" name="fakultas" placeholder="Fakultas">
		<input type="text" name="jurusan" placeholder="jurusan">
		<input type="number" name="ipk" placeholder="ipk">
		<input type="submit" name="add" value="Simpan">
	</form>
	<hr>
	<div>
		<table border="1" cellpadding="-1">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Fakultas</th>
					<th>Jurusan</th>
					<th>IPK</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($data = mysqli_fetch_assoc($getQuery)) { ?> 
				<tr>
					<td><?= $data['nim_mahasiswa'] ?></td>
					<td><?= $data['nm_mahasiswa'] ?></td>
					<td><?= $data['tempat_lahir']?></td>
					<td><?= $data['tanggal_lahir']?></td>
					<td><?= $data['fakultas']?></td>
					<td><?= $data['jurusan']?></td>
					<td><?= $data['ipk']?></td>
					<td>
						<a href="delete.php?id=<?= $data['id_mahasiswa']?>" onClick="alert('Hapus Data?')" class="button"><button>Delete</button></a>
						<a href="edit.php"><button>Edit</button></a>
					</td>
				</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
</body>
</html>