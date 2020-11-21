<?php
    include_once("koneksi.php");
    $ID = $_GET['ID'];
?>

<html>
<head>  
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEM TRILOGI</title>
    <link rel="stylesheet" href="asset/labora.css">
    <link rel="stylesheet" type="text/css" href="asset/table.css">
</head>

<body>
    <div>
        <h1>BEM TRILOGI</h1>
        <h2>
            <?php
                echo 'Edit data of ID =';
                print $ID;
            ?>
        </h2>
    </div>
    <div>
        <a href="index.php"><img class="emojika" alt="about" src="asset/home.png">  Home</a>
        <a href="index2.php"><img class="emojika" alt="about" src="asset/list.png">  List Prodi</a>
        <a href="index3.php"><img class="emojika" alt="about" src="asset/list.png">  List Departemen</a>
        <a href="add.php"><img class="emojika" alt="about" src="asset/add.png">  Add Data</a>
        <a href="add2.php"><img class="emojika" alt="about" src="asset/add.png">  Add Studi</a>
        <a href="add3.php"><img class="emojika" alt="about" src="asset/add.png">  Add Departemen</a>
        <a href="about.php"><img class="emojika" alt="about" src="asset/man.png">  About Us</a>
        <hr>
    </div>
    <div>
        <form action="edit2.php" method="post" name="forms">
            <table width="25%" border="0">
                <tr> 
                    <td>Nama</td>
                    <td><input type="text" name="Nama" placeholder="Nama" required></td>
                </tr>
                <tr> 
                    <td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
                    <td><input type="submit" name="update" value="update"></td>
                </tr>
            </table>
        </form>
        <?php
            include_once("koneksi.php");
            if(isset($_POST['update'])){ 
                $ID = $_POST['ID'];
                $nama = $_POST['Nama'];
                $result = mysqli_query($mysqli, "UPDATE studi SET nama_prodi='$nama' WHERE kode_studi= '$ID'");
                if ($result) {
                    echo "<script>alert('Data Berhasil Di ubah :)')</script>";
                    header("location: index2.php");
                    //coment di browser
                }
                else{
                    echo "<script>alert('Data Tidak Berhasil Di ubah :)')</script>";
                    //coment di browser
                }
            }
        ?>
    </div>
</body>
</html>