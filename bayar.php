<?php
	include_once("conn.php");
	$query = mysqli_query($conn,"DELETE FROM pinjam WHERE denda =1");
	if($query){
		echo "<script> alert('Buku berhasil dikembalikan.'); window.location = '/Perpustakaan-Online'</script>";
	}
	else{
		echo "<script> alert('Pembayaran gagal.'); window.location = '/list-bayar.php'</script>";
	}
?>