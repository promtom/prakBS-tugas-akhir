<?php
    // Untuk konek ke database
    include_once("koneksi.php");
    // Query untuk menampilkan data yang berada di dalam table
    $result = mysqli_query($mysqli, "SELECT * FROM departemen sewa ORDER BY Kode");
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
        <h2>List Data Kode</h2>
    </div>
    <div>
        <a href="index.php"><img class="emojika" alt="about" src="asset/home.png">  Home</a>
        <a href="index2.php"><img class="emojika" alt="about" src="asset/list.png">  List Prodi</a>
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
                <th>Kode</th>
                <th>Departemen</th>
                <th>Aksi</th>
            </tr>
            <?php
                while($data_main=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$data_main['Kode']."</td>";
                    echo "<td>".$data_main['Nama']."</td>";
                    echo "<td><a href='edit3.php?ID=$data_main[Kode]'> <img class='emojika' alt='edit' src='asset/edit.png'>  Edit</a> | <a href='delete3.php?ID=$data_main[Kode]'>  <img class='emojika' alt='delete' src='asset/delete.png'>  Delete</a></td></tr>";
                }
            ?>
        </table>
    </div>
    <!-- </center> -->
</body>
</html>