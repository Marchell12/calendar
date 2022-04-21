<?php
$mysqli=mysqli_connect("localhost","root","","Admin");
mysqli_select_db($mysqli,"Admin") or die("Gagal terhubung ke database");
?>