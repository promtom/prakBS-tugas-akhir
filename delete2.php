<?php
    include_once("koneksi.php");
    // Get id from URL to delete that user
    $ID = $_GET['ID'];
    $result = mysqli_query($mysqli, "DELETE FROM studi WHERE kode_studi='$ID'");
    header("Location:index2.php");
?>