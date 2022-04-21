<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA MENTOR
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah data mentor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin_mentor/uji_tambah_jadwal_mentor.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>Jadwal</label>
                  <input type="text" class="form-control" placeholder="Enter Jadwal" name="Jadwal">
                </div>
                <div class="form-group">
                  <label>Courses</label>
                <input type="text" class="form-control" placeholder="Courses" name="Courses">
                </div>
                <div class="form-group">
                	<label>Waktu</label>
                	<input type="number" class="form-control" placeholder="Waktu"  name="Waktu"></inp>
                </div>
                <div class="form-group">
                	<label>Tanggal</label>
                	<input type="text" class="form-control" placeholder="Tanggal" name="Tanggal"></input>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
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