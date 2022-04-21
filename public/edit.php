<?php
    $koneksi = mysqli_connect("localhost", "root", "", "dbjadwal");
    echo $kode_jadwal = $_POST['kode jadwal'];
    echo $mentor = $_POST['mentor'];
    echo $pembelajaran = $_POST['Courses'];
    echo $Waktu = $_POST['Waktu'];
    echo $Tanggal = $_POST['Tanggal'];
    echo $jam = $_POST['jam'];
    echo $id_mentor = $_POST['id_mentor'];

    mysqli_query($koneksi, "update mentor set mentor='$kode_jadwal', mentor='$mentor', jadwal='$jadwal' courses='$courses' waktu='$waktu' tanggal='$tanggal' where id_mentor='$id_mentor' ");
    
    
    header('Location: index.php');
?>