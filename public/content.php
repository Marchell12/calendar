<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='Admin') {
          include "admin_mentor/Admin.php";
        }
        elseif ($_GET['hal']=='tambah_jadwal_mentor') {
          include "admin_mentor/tambah_jadwal_mentor.php";
        }
        elseif ($_GET['hal']=='edit_jadwal_mentor') {
          include "admin_mentor/edit_jadwal_mentor.php";
        }
        else
        {
          include "home.php";
        }
    }else{
    include "home.php";
    }
?>