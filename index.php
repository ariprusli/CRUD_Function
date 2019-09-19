<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku Tersedia</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

</head>
<body>
	<h2><center>Daftar Buku Tersedia</center></h2>
	<div class="container">
	<table class="table table-border table-hover">
		<thead>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Tahun</th>
			<th>Action</th>
		</thead>
		<?php
		require 'library.php';
		$buku = new Library();

		$show = $buku->showBook();
		while ($data = $show->fetch(PDO::FETCH_OBJ)) {

			echo "
				<tr>
					<td>$data->id</td>
					<td>$data->judul</td>
					<td>$data->pengarang</td>
					<td>$data->penerbit</td>
					<td>$data->tahun</td>
					<td><a href='edit.php?kode=$data->id'class='btn btn-warning btn-sm'>Edit</a> | <a href='index.php?delete=$data->id'class='btn btn-danger btn-sm'>Delete</a></td>
				</tr>";
		}
		?>	
	</table>
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</body>
</html>

<?php
if(isset($_GET['delete'])){

	$id = $_GET['delete'];
	$buku->deleteBook($id);
	header('location:index.php');
}