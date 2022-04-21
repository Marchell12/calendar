<?php
    $koneksi = mysqli_connect("localhost", "root", "", "dbjadwal");
    $id_mentor = $_GET['id_mentor'];

    mysqli_query($koneksi, "delete from mentor where id_mentor='$id_mentor'");
    
    
    header('Location: index.php');
?>