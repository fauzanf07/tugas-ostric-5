<?php
	include_once("conn.php");
	$id = $_GET['id'];
	$today = strtotime(date("Y/m/d"));
	$batas = mysqli_query($conn,"SELECT * FROM pinjam WHERE id='$id'");
	$batas = mysqli_fetch_array($batas);
	$batas = strtotime($batas['batas_pengembalian']);
	if($today > $batas){
		$query = mysqli_query($conn,"UPDATE pinjam set denda=1 WHERE id='$id'");
		echo "<script> alert('Anda telat mengembalikan buku. Anda harus membayar denda dulu!'); window.location = 'list-bayar.php';</script>";
	}
	else{
		$query = mysqli_query($conn,"DELETE FROM pinjam WHERE id='$id'");
		echo "<script> alert('Buku berhasil dikembalikan!'); window.location = '/Perpustakaan-Online';</script>";
	}
?>