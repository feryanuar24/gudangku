<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-image: url(img/bg.jpg); background-size: 100%;">

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        Gudangku
        </a>
        <a href="index.php" class="btn btn-dark rounded">Home</a>
    </div>
    </nav>
    <!-- Akhir Navbar -->

	<!-- Form -->
	<div class="container mt-5 bg-light rounded" style="padding-right: 40%">
		<form action="add.php" method="post" name="form1">
			<table class="table table-light table-borderless">
				<tr> 
					<td class="form-label">Tanggal Masuk</td>
					<td><input type="date" name="tanggal" class="form-control"></td>
				</tr>
				<tr> 
					<td class="form-label">Nama Barang</td>
					<td><input type="text" name="nama" class="form-control"></td>
				</tr>
				<tr> 
					<td class="form-label">Jumlah Barang</td>
					<td><input type="number" name="jumlah" class="form-control"></td>
				</tr>
				<tr> 
					<td></td>
					<td><input type="submit" name="Submit" value="Create" class="btn btn-success"></td>
				</tr>
			</table>
		</form>
	</div>
	<!-- Akhir Form -->

	<?php
 
	//cek add
	if(isset($_POST['Submit'])) {
		$tanggal = $_POST['tanggal'];
		$nama = $_POST['nama'];
		$jumlah = $_POST['jumlah'];
		
		//membuat koneksi database menggunakan file config
		include_once("config.php");
				
		//menginput data menggunkan query
		$result = mysqli_query($mysqli, "INSERT INTO barang_masuk(tanggal,nama,jumlah) VALUES('$tanggal','$nama','$jumlah')");
		
		//pesan ketika data berasil diinput
		echo "<div class='bg-light text-dark fw-bolder container p-3 rounded' style='padding-right: 40%'>
		Data Berhasil terinput
		<br>
		<a href='index.php' class='btn btn-primary'>Lihat Data</a>
		</div>";
	}

	?>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>