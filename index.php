<?php

//membuat koneksi database menggunakan file config
include_once("config.php");
 
//mengambil data menggunakan query
$result = mysqli_query($mysqli, "SELECT * FROM barang_masuk ORDER BY id DESC");

?>
 
<html>
<head>    
    <title>Home</title>
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
        <a href="add.php" class="btn btn-dark rounded">Create</a>
    </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Table -->
    <div class="container mt-5">
        <table width="50%" class="table table-light table-bordered">
            <tr class="text-center">
                <th class="table-dark">Tanggal</th> 
                <th class="table-dark">Nama</th> 
                <th class="table-dark">Jumlah</th> 
                <th class="table-dark">Option</th>
            </tr>
            <?php  
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td class='pt-3'>".$user_data['tanggal']."</td>";
                echo "<td class='pt-3'>".$user_data['nama']."</td>";
                echo "<td class='pt-3'>".$user_data['jumlah']."</td>";    
                echo 
                "<td class='text-center'><a href='edit.php?id=$user_data[id]' class='btn btn-warning'>Update</a>
                &nbsp&nbsp&nbsp
                <a href='delete.php?id=$user_data[id]' class='btn btn-danger'>Delete</a></td>";
                echo "<tr>";        
            }
            ?>
        </table>
    </div>
    <!-- Akhir Table -->

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>