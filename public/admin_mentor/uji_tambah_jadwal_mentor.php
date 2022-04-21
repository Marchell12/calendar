<?php
$Jadwal=$_POST['Jadwal'];
$Courses=$_POST['Courses'];
$Waktu=$_POST['Waktu'];
$Tanggal=$_POST['Tanggal'];

include("../koneksi.php");

$sql="INSERT INTO mentor(Jadwal,Courses,Waktu,Tanggal) values('$Jadwal',
'$Courses',
'$Waktu',
'$Tanggal')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=Admin&pesan=berhasil_tambah");
}else{
	header("location:../index.php?hal=Admin&pesan=gagal_tambah");
	echo mysqli_error();
	echo "$sql";
}


