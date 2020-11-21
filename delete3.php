<?php
    include_once("koneksi.php");
    // Get id from URL to delete that user
    $ID = $_GET['ID'];
    $result = mysqli_query($mysqli, "DELETE FROM departemen WHERE Kode='$ID'");
    header("Location:index3.php");
?>