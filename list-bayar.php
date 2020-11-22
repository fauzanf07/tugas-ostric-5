<?php
	include_once("conn.php");
	$query = mysqli_query($conn,"SELECT * FROM pinjam WHERE denda =1");
	$rows = mysqli_num_rows($query);
	$total =0;
	if($rows == 0){
		echo "<script> alert('Tidak ada Pembayaran yang harus dibayar.'); window.location = '/Perpustakaan-Online'</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Online</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand ml-3" href="#">Perpustakaan Online</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item mr-5">
	        <a class="nav-link" href="/Perpustakaan-Online">Peminjaman <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item mr-5">
	        <a class="nav-link" href="kembali.php">Pengembalian</a>
	      </li>
	      <li class="nav-item active mr-5">
	        <a class="nav-link" href="list-bayar.php">Pembayaran</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="card mt-5">
		  <div class="card-header">
		    <h4 class="text-center">Buku yang harus dibayar</h4>
		  </div>
		  <div class="container">
		  	<table class="table table-bordered mt-3 table-striped">
			  <thead class="bg-success">
			    <tr class="d-flex">
			      <th scope="col" class="col-lg-1 text-white text-center">No</th>
			      <th scope="col" class="col-lg-6 text-white">Buku</th>
			      <th scope="col" class="col-lg-3 text-white">Batas waktu pengembalian</th>
			      <th scope="col" class="col-lg-2 text-white">Denda</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $no =1; while($row = mysqli_fetch_array($query)): ?>
			    <tr class="d-flex">
			      <th scope="row" class="col-lg-1 text-center"><?php echo $no++; ?></th>
			      <td class="col-lg-6"><?php echo $row['judul_buku']; ?></td>
			      <td class="col-lg-3"><?php echo $row['batas_pengembalian']; ?></td>
			      <td class="col-lg-2"><?php 
			      	$id = $row['id'];
					$today = strtotime(date("Y/m/d"));
					$batas = mysqli_query($conn,"SELECT * FROM pinjam WHERE id='$id'");
					$batas = mysqli_fetch_array($batas);
					$batas = strtotime($batas['batas_pengembalian']);
					$denda = ceil(abs($today-$batas)/86400);
					$denda = $denda*1000;
					$total += $denda;
					echo "Rp. ",$denda;
					?>
				  </td>
			    </tr>
				<?php endwhile; ?>
				<tr class="d-flex">
			    	<td class="col-lg-10"><b>Total Denda :</b></td>
			    	<td class="col-lg-2"><?php echo "Rp. ",$total; ?></td>
			    </tr>
			  </tbody>
			</table>
			<a href="bayar.php" class="btn btn-info mb-3 float-right">Bayar Denda</a>
		  </div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>