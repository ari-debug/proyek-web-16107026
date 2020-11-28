<?php 
	include 'config.php';
	if(isset($_POST['add'])){
			$nim = $_POST['nim'];
			$nama = $_POST['nama_mhs'];
			$tmpt = $_POST['tmpt_lahir'];
			$tgl = $_POST['tgl_lahir'];
			$fak = $_POST['fakultas'];
			$jurusan = $_POST['jurusan'];
			$ipk = $_POST['ipk'];

			$insert = "INSERT INTO tb_mahasiswa SET nim_mahasiswa='$nim', nm_mahasiswa='$nama', tempat_lahir='$tmpt', tanggal_lahir='$tgl', fakultas='$fak', jurusan='$jurusan', ipk='$ipk'";
			$query = mysqli_query($con, $insert);

			if($query){
				echo "<script>
				alert('Berhasil Tambah')
						window.location.href = 'DaftarMahasiswa.php'

					  </script>";
			}else{
				echo "<script>
				alert('Gagal')
						window.location.href = 'DaftarMahasiswa.php'

					  </script>";
			}
			
	}
	?>