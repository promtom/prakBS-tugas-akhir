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
        <form action="edit.php" method="post" name="form2">
            <table width="25%" border="0">    
                <tr> 
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder="Nama" required></td>
                </tr>
                <tr> 
                    <td>Tanggal lahir</td>
                    <td><input type="date" name="tgl_lahir" placeholder="tgl_lahir" required></td>
                </tr>
                <tr> 
                    <td>Angkatan</td>
                    <td><input type="number" name="angkatan" placeholder="Angkatan" required></td>
                </tr>
                <tr> 
                    <td>Agama</td>
                    <td><input type="text" name="agama" placeholder="Agama" required></td>
                </tr>
                <tr> 
                    <div>
                        <td>Divisi</td>
                        <td>
                            <?php
                                include_once("koneksi.php");
                                $set = mysqli_query($mysqli,"SELECT * FROM departemen");
                            ?>
                            <select name="departemen" >
                            <option disabled selected>Pilih departemen</option>
                                <?php
                                    while($rows=$set->fetch_assoc()){
                                        $dpet_name = $rows['Nama'];
                                        $dpetnum = $rows['Kode'];
                                        echo "<option value='$dpetnum'>$dpet_name</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </div>
                </tr>
                <tr> 
                    <div>
                        <td>Study</td>
                        <td>
                            <?php
                                include_once("koneksi.php");
                                $set2 = mysqli_query($mysqli,"SELECT * FROM studi");
                            ?>
                            <select name="studi">
                            <option disabled selected>Pilih Prodi</option>
                                <?php
                                    while($rows=$set2->fetch_assoc()){
                                        $studi_name = $rows['nama_prodi'];
                                        $studinum = $rows['kode_studi'];
                                        echo "<option value='$studinum'>$studi_name</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </div>
                </tr>
                <tr> 
                    <td>Hobi</td>
                    <td><input type="text" name="hobi" placeholder="hobi" required></td>
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
                $nama = $_POST['nama'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $agama = $_POST['agama'];
                $hobi = $_POST['hobi'];
                $angkatan = $_POST['angkatan'];
                $dep = $_POST['departemen'];
                $pro = $_POST['studi'];
                $result = mysqli_query($mysqli, "UPDATE anggota SET nama='$nama', tgl_lahir='$tgl_lahir', agama='$agama', angkatan='$angkatan' WHERE ID= '$ID'");
                $sql2 = mysqli_query($mysqli, "UPDATE main SET kode_studi='$pro',Kode='$dep' WHERE ID='$ID'");
                if ($result and $sql2) {
                    echo "<script>alert('Data Berhasil Di ubah :)')</script>";
                    header("location: index.php");
                    //coment di browser
                }
                else{
                    echo "<script>alert('Data Tidak Berhasil Di ubah :)')</script>";
                    header("location: edit.php?ID=$ID");
                    //coment di browser
                }
            }
        ?>
    </div>
</body>
</html>