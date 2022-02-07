<?php
include 'function.php';
	$kode_dokter = $_POST['kode_dokter'];
	$nama_dokter = $_POST['nama_dokter'];
	$spesialis = $_POST['spesialis'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	$riwayat_catatan = $_POST['riwayat_catatan'];
	$id_pasien = $_POST['id_pasien'];

	$cek = mysqli_query($conn, "insert into dokter (kode_dokter, nama_dokter, spesialis, alamat, no_telp, riwayat_catatan, id_pasien) values ('$kode_dokter','$nama_dokter','$spesialis','$alamat','$no_telp','$riwayat_catatan','$id_pasien')");
	if ($cek){
		echo "<script>window.alert('DATA SUDAH DISIMPAN')
   		window.location='index.php'</script>";
	} else {
		echo '<script type="text/javascript">alert("Gagal menyimpan data");window.location="index.php"</script>';
	}
?>