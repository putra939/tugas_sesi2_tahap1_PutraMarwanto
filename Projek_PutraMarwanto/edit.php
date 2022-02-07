<?php  
include 'function.php';
	$id_dokter = $_POST['id_dokter'];
	$riwayat_catatan = $_POST['riwayat_catatan'];

	$update = mysqli_query($conn, "update dokter set riwayat_catatan='$riwayat_catatan' where id_dokter='$id_dokter'");
	if($update){
		echo "<script>window.alert('DATA SUDAH DIEDIT')
   		window.location='index.php'</script>";
	} else {
		echo 'Gagal Diubah';
		header('location:index.php');
	}
?>