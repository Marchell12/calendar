<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EDIT DATA MENTOR
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
      </ol>
    </section>
<?php
include ("koneksi.php");
$sql="select * from mentor where id='$_GET[id]' ";
$query=mysqli_query($mysqli, $sql);
$row=mysqli_fetch_array($query);
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form edit data mentor </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin_mentor/edit_jadwal.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>Jadwal</label>
                  <input type="text" class="form-control" placeholder="Enter Jadwal" name="Jadwal" value="<?php echo $row['Jadwal'];?>">
                </div>
                <div class="form-group">
                  <label>Courses</label>
                  <input type="text" class="form-control" placeholder="Courses" name="Courses" value="<?php echo $row['Courses'];?>">
                </div>
                <div class="form-group">
                	<label>Waktu</label>
                	<textarea type= "number" class="form-control" name="Waktu"><?php echo $row['Waktu'];?></textarea>
                </div>
                <div class="form-group">
                	<label>Tanggal</label>
                	<textarea type="number" class="form-control" name="Tanggal"><?php echo $row['Tanggal'];?></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>