<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Mentor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
</head>

<body>
    <br>
                    <table class="table table-striped" id="table_id">
                        <thead>
                            <tr>  
                                <th>No</th>
                                <th>Kode Jadwal</th>
                                <th>Mentor</th>
                                <th>Pembelajaran</th>
                                <th>Kelas</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $koneksi = mysqli_connect("localhost", "root", "", "dbjadwal");
                                $no = 1;
                                $select         = "SELECT * FROM mentor";
                                $select         = mysqli_query($koneksi, $select);
                                while($data= mysqli_fetch_array($select)){
                            ?>
                            <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['kode jadwal']; ?></td>
                                    <td><?php echo $data['mentor']; ?></td>
                                    <td><?php echo $data['pembelajaran']; ?></td>
                                    <td><?php echo $data['kelas']; ?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td><?php echo $data['jam']; ?></td>
                                    <td>
                                        <a href="edit.php?id_jam=<?php echo $data['id_mentor']; ?>" class="btn btn-sm btn-success"> Edit</a>
                                        <a href="hapus.php?id_jam=<?php echo $data['id_mentor']; ?>" class="btn btn-sm btn-danger"> Delete</a>
                                    </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>

    <!-- fungsi datatable -->
    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });

    </script>
</body>

</html>