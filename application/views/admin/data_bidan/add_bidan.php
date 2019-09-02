<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#"><i></i> Tambah Bidan</a></li>
      </ol>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Bidan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div> 
        <div class="box-body">
         <form action="<?php echo base_url()."C_detil_bidann/insert"; ?>" method="POST">		 
              <div class="box-body">
                  <label for="id_bidan"></label>
                  <input type="hidden" class="form-control" name="id_bidan" id="id_bidan" placeholder="">
                <div class="form-group">
                  <label for="nama_bidan">Nama Bidan</label>
                  <input type="text" class="form-control" name="nama_bidan" id="nama_bidan" placeholder="Nama Bidan" required="">
                </div>
                <div class="form-group">
                  <label for="alamat_bidan">Alamat Bidan</label>
                  <input type="text" class="form-control" name="alamat_bidan" id="alamat_bidan" placeholder="Alamat Bidan" required="">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                  <label for="tlp_bidan">No Hp</label>
                  <input type="text" class="form-control" name="tlp_bidan" id="tlp_bidan" placeholder="No HP" required="">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" name="password" id="password" placeholder="Password" required="">
                </div>
                 <div class="form-group">        
                  <input type="text" name="level" required="" value="bidan" hidden="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir_bidan">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir_bidan" id="tempat_lahir_bidan" placeholder="Tempat Lahir" required="">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir_bidan">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir_bidan" id="tgl_lahir_bidan" placeholder="" required="">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          &copy; Puskesmas Lohbener
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->