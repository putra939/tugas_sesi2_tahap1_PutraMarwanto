<?php  
include 'function.php';
	$no = $_POST['no'];

	$hapus = mysqli_query($conn, "delete from dokter where id_dokter='$no'");
	if($hapus){
		header('location:index.php');
	} else {
		echo 'Gagal Dihapus';
		header('location:index.php');
	}
?>