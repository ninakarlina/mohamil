<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#"><i></i> Daftar Periksar</a></li>
      </ol>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Periksa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div> 
        <div class="box-body">
         <form action="<?php echo base_url()."C_Daftar/insert"; ?>" method="POST">		 
              <div class="box-body">
                  <input type="hidden" class="form-control" name="id_pendaftaran" placeholder="">
                <div class="form-group">
                  <label for="username"></label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                </div>
                <div class="form-group">        
                  <label>Level</label>
                  <select class="form-control" name="level">
                            <option disabled diselected>-- Pilih Level  --</option>
                            <option value="admin">Admin</option>
                            <option value="bidan">Bidan</option>
                            <option value="ibu">Ibu</option>
                  </select>
                </div>
        

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