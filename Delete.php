<?php 
	include 'config.php';
			$id = $_GET['id'];

			$insert = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa='$id'";
			$query = mysqli_query($con, $insert);
			// die(var_dump($query));

			if($query){
				echo "<script>
				alert('Berhasil Dihapus')
						window.location.href = 'DaftarMahasiswa.php'

					  </script>";
			}else{
				echo "<script>
				alert('Gagal')
						window.location.href = 'DaftarMahasiswa.php'

					  </script>";
			}
			
	
	?>