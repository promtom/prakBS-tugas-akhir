<?php
    // Untuk konek ke database
    include_once("koneksi.php");
    // Query untuk menampilkan data yang berada di dalam table
    $result = mysqli_query($mysqli, "SELECT * FROM studi sewa ORDER BY kode_studi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEM TRILOGI</title>
    <link rel="stylesheet" type="text/css" href="asset/table.css">
    <link rel="stylesheet" href="asset/labora.css">
</head>
<body>
    <div>
        <h1>BEM TRILOGI</h1>
        <h2>List Data Urut Kode Studi</h2>
    </div>
    <div>
        <a href="index.php"><img class="emojika" alt="about" src="asset/home.png">  Home</a>
        <a href="index3.php"><img class="emojika" alt="about" src="asset/list.png">  List Departemen</a>
        <a href="add.php"><img class="emojika" alt="about" src="asset/add.png">  Add Data</a>
        <a href="add2.php"><img class="emojika" alt="about" src="asset/add.png">  Add Studi</a>
        <a href="add3.php"><img class="emojika" alt="about" src="asset/add.png">  Add Departemen</a>
        <a href="about.php"><img class="emojika" alt="about" src="asset/man.png">  About Us</a>
        <hr>
    </div>
    <!-- <center> -->
    <div>
        <table border = "i">
            <tr>
                <th>Kode Studi</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
            <?php
                while($data_main=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$data_main['kode_studi']."</td>";
                    echo "<td>".$data_main['nama_prodi']."</td>";
                    echo "<td><a href='edit2.php?ID=$data_main[kode_studi]'> <img class='emojika' alt='edit' src='asset/edit.png'>  Edit</a> | <a href='delete2.php?ID=$data_main[kode_studi]'>  <img class='emojika' alt='delete' src='asset/delete.png'>  Delete</a></td></tr>";
                }
            ?>
        </table>
    </div>
    <!-- </center> -->
</body>
</html>