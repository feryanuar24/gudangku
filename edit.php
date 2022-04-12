<?php

//memnaggil database menggunakan file config
include_once("config.php");
 
//cek form edit
if(isset($_POST['update'])){	
	$id = $_POST['id'];
	$tanggal = $_POST['tanggal'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
		
	//membuat variabel query hapus update data
	$result = mysqli_query($mysqli, "UPDATE barang_masuk SET tanggal='$tanggal',nama='$nama',jumlah='$jumlah' WHERE id=$id");
	
	//merefresh halaman setelah update
	header("Location: index.php");
}

?>

<?php

//membuat variabel get
$id = $_GET['id'];
 
//membuat variabel query select data
$result = mysqli_query($mysqli, "SELECT * FROM barang_masuk WHERE id=$id"); 
while($user_data = mysqli_fetch_array($result)){
	$tanggal = $user_data['tanggal'];
	$nama = $user_data['nama'];
	$jumlah = $user_data['jumlah'];
}

?>

<html>
<head>	
	<title>Update</title>
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
		<form action="edit.php" method="post" name="update_user">
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
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="update" value="Update" class="btn btn-success"></td>
				</tr>
			</table>
		</form>
	</div>
	<!-- Akhir Form -->

	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>