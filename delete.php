<?php
    include_once("koneksi.php");
    // Get id from URL to delete that user
    $ID = $_GET['ID'];
    $result = mysqli_query($mysqli, "DELETE FROM anggota WHERE ID='$ID'");
    $sql2 = mysqli_query($mysqli, "DELETE FROM main WHERE ID='$ID'");
    header("Location:index.php");
?>