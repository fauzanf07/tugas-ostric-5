<?php
	include_once("conn.php");
	$id = $_POST['id'];
	$batas = $_POST['batas'];
	$judul_buku = $_POST['judul_buku'];
	$query = mysqli_query($conn,"SELECT * FROM pinjam WHERE judul_buku = '$judul_buku'");
	$jumlah = mysqli_num_rows($query);
	if($jumlah == 0){
		$insert = mysqli_query($conn,"INSERT INTO pinjam VALUES ('','$judul_buku','$batas',0)");
		if($insert){
			echo "<script> alert('Berhasil Dipinjam!'); window.location = 'detail.php?id=",$id,"';</script>";
		}
		else{
			echo "<script> alert('Gagal Dipinjam!'); </script>";
		}
	}
	else{
			echo "<script> alert('Maaf anda sudah meminjam buku ini!'); window.location = 'detail.php?id=",$id,"';</script>";
	}
?>