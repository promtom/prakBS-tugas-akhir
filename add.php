<!DOCTYPE html>
<html lang="en">
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
        <h2>Tambah data</h2>
    </div>
    <div>
        <a href="index.php"><img class="emojika" alt="about" src="asset/home.png">  Home</a>
        <a href="index2.php"><img class="emojika" alt="about" src="asset/list.png">  List Prodi</a>
        <a href="index3.php"><img class="emojika" alt="about" src="asset/list.png">  List Departemen</a>
        <a href="add2.php"><img class="emojika" alt="about" src="asset/add.png">  Add Studi</a>
        <a href="add3.php"><img class="emojika" alt="about" src="asset/add.png">  Add Departemen</a>
        <a href="about.php"><img class="emojika" alt="about" src="asset/man.png">  About Us</a>
        <hr>
    </div>
    <div>
        <form action="add.php" method="post" name="form1">
            <table width="0%" border="0">
                <tr> 
                    <td>ID</td>
                    <td><input type="text" name="ID" placeholder="ID" required></td>
                </tr>
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
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
            <?php
                if(isset($_POST['Submit'])){  
                    $ID = $_POST['ID']; 
                    $nama = $_POST['nama'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    $agama = $_POST['agama'];
                    $hobi = $_POST['hobi'];
                    $angkatan = $_POST['angkatan'];
                    $dep = $_POST['departemen'];
                    $pro = $_POST['studi'];
                    include_once("koneksi.php"); //untuk manggil file koneksi
                    $result = mysqli_query($mysqli, "INSERT INTO anggota(ID, nama, tgl_lahir, agama, angkatan) VALUES ('$ID', '$nama','$tgl_lahir','$agama','$angkatan')");
                    $sql2 = mysqli_query($mysqli, "INSERT INTO main(ID, kode_studi, Kode) VALUES ('$ID','$pro','$dep')");
                    if ($result) {
                        echo "<script>alert('Data Berhasil Di Inputkan :)')</script>";
                        header("location: index.php");
                    }
                    else{
                        echo "<script>alert('Data Tidak Berhasil Di Inputkan :)')</script>";
                        header("location: add.php");
                        //coment di browser
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>