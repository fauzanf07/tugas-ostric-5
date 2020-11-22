<?php
	include_once("conn.php");
	$query = mysqli_query($conn,"SELECT * FROM buku");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Online</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
	<div class="container">
		<div class="card mt-5">
		  <div class="card-header">
		    <h4 class="text-center">Daftar Buku</h4>
		  </div>
		  <div class="container">
		  	<table class="table table-bordered mt-3 table-striped">
			  <thead class="bg-success">
			    <tr class="d-flex">
			      <th scope="col" class="col-lg-1 text-white text-center">No</th>
			      <th scope="col" class="col-lg-9 text-white">Buku</th>
			      <th scope="col" class="col-lg-2 text-white">Detail Buku</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $no =1; while($row = mysqli_fetch_array($query)): ?>
			    <tr class="d-flex">
			      <th scope="row" class="col-lg-1 text-center"><?php echo $no++; ?></th>
			      <td class="col-lg-9"><?php echo $row['judul']; ?></td>
			      <td class="col-lg-2 text-center"><a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Detail</a></td>
			    </tr>
				<?php endwhile; ?>
			  </tbody>
			</table>
		  </div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>