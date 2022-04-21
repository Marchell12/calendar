<?php
$id=$_POST['id'];
$Jadwal=$_POST['Jadwal'];
$Courses=$_POST['Courses'];
$Waktu=$_POST['Waktu'];
$Tanggal=$_POST['Tanggal'];

include("../koneksi.php");

$sql="UPDATE mentor set Nama='$Jadwal',
Courses='$Courses',
Waktu='$Waktu'
Tanggal='$Tanggal',
where id='$id'";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=Admin&pesan=berhasil_edit");
}else{
	header("location:../index.php?hal=Admin&pesan=gagal_edit");
	echo mysqli_error();
	echo "$sql";
}


