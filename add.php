<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Tambah Buku</h2>
		<div class="row">
			<div class="col-sm-6">
				<form action="" method="post">
					<div class="form-group">
						<label for="judul Buku">Judul Buku</label>
						<input type="text" class="form-control" name="judul">
					</div>
					<div class="form-group">
						<label for="pengarang">Pengarang</label>
						<input type="text" class="form-control" name="pengarang">
					</div>
					<div class="form-group">
						<label for="penerbit">Penerbit</label>
						<input type="text" class="form-control" name="penerbit">
					</div>
					<div class="form-group">
						<label for="tahun">tahun</label>
						<input type="text" class="form-control" name="tahun">
					</div>
						<input type="submit" class="btn btn-info" value="Tambah" name="submit">
				</form>
			</div>
		</div>	
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</body>
</html>
<?php
require 'library.php';
if(isset($_POST['submit'])){

	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];

	$buku = new library();
	$add = $buku->addbook($judul, $pengarang, $penerbit, $tahun);

	if($add = 'Success'){

		header('Location:index.php');
	}else{

		echo "Error";
	}
}
?>