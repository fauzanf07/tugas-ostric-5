<?php
	include_once("conn.php");
	$id_buku = $_GET['id'];
	$query = mysqli_query($conn,"SELECT * FROM buku WHERE id = '$id_buku'");
	$row = mysqli_fetch_array($query);
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
	      <li class="nav-item active mr-5">
	        <a class="nav-link" href="/Perpustakaan-Online">Peminjaman <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item mr-5">
	        <a class="nav-link" href="kembali.php">Pengembalian</a>
	      </li>
	      <li class="nav-item mr-5">
	        <a class="nav-link" href="list-bayar.php">Pembayaran</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container mt-5 detail-buku">
		<div class="card mb-3" style="max-width: 820px;">
		  <div class="row no-gutters">
		    <div class="col-md-4">
		      <img src="<?php echo $row['cover']; ?>" class="card-img cover mt-4 ml-4" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h5 class="card-title"><?php echo $row['judul']; ?></h5>
		        <table class="table">
					<tr class="d-flex">
						<th scope="col" class="col-lg-4">Judul Buku</th>
						<td class="col-lg-8">: <?php echo $row['judul']; ?></td>
					</tr>
					<tr class="d-flex">
						<th scope="col" class="col-lg-4 ">Penulis</th>
						<td class="col-lg-8">: <?php echo $row['penulis']; ?></td>
					</tr>
					<tr class="d-flex">
						<th scope="col" class="col-lg-4">Genre</th>
						<td class="col-lg-8">: <?php echo $row['genre']; ?></td>
					</tr>
					<tr class="d-flex">
						<th scope="col" class="col-lg-4">Description</th>
						<td class="col-lg-8">: <?php echo $row['description']; ?></td>
					</tr>
		        </table>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div class="container">
		<div class="card mt-5" style="max-width: 900px;">
		  <div class="card-header bg-success">
		    <h4 class=" text-white">Pinjam Buku Ini</h4>
		  </div>
		  <div class="container mt-3">
		  	<form action="pinjam.php" method="post">
		  		<div class="form-group">
		  			<label for="batas">Batas Pengembalian</label>
		  			<input type="date" name="batas" class="form-control"></input>
		  			<input type="hidden" name="judul_buku" value="<?php echo $row['judul']; ?>"></input>
		  			<input type="hidden" name="id" value="<?php echo $row['id']; ?>"></input>
		  			<input type="submit" class="btn btn-info mt-4"></input>
		  		</div>
		  	</form>
		  </div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>