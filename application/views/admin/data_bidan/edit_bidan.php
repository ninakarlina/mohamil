<!-- Default box -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i></i> Edit Data Bidan</a></li>
      </ol>
      <br>
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Data Bidan</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
           <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
	<?php foreach($bidan as $bi){ ?>
    <form action="<?php echo base_url()."C_detil_bidann/update_bidan"; ?>" method="POST">		 
        <div class="box-body">
           <div class="form-group">
             <!--  <label for="id_artikel">Id Artikel</label> -->
              <input type="hidden" class="form-control" name="id_bidan"  value="<?php echo $bi->id_bidan; ?>"  placeholder="" >
              <input type="hidden" class="form-control" name="id_user"  value="<?php echo $bi->id_user; ?>"  placeholder="" >
            </div>
            <div class="form-group">
              <label for="nama_bidan">Nama Bidan</label>
              <input type="text" class="form-control" name="nama_bidan"  value="<?php echo $bi->nama_bidan; ?>" placeholder="Nama Bidan">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username"  value="<?php echo $bi->username; ?>" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"  value="<?php echo $bi->email; ?>" placeholder="Email">
            </div>
            <div class="form-group">        
                  <input type="text" name="level" required="" value="bidan" hidden="">
                </div>
            <div class="form-group">
              <label for="alamat_bidan">Alamat Bidan</label>
              <input type="text" class="form-control" name="alamat_bidan"  value="<?php echo $bi->alamat_bidan; ?>" placeholder="Alamat Bidan">
            </div>
            <div class="form-group">
              <label for="tlp_bidan">No HP</label>
              <input type="text" class="form-control" name="tlp_bidan"  value="<?php echo $bi->tlp_bidan; ?>"  placeholder="No HP">
            </div>
            <div class="form-group">
              <label for="tempat_lahir_bidan">Tempat Lahir Bidan</label>
              <input type="text" class="form-control" name="tempat_lahir_bidan"  value="<?php echo $bi->tempat_lahir_bidan; ?>" placeholder="Tempat Lahir Bidan">
            </div>
            <div class="form-group">
              <label for="tgl_lahir_bidan">Tanggal Lahir Bidan</label>
              <input type="date" class="form-control" name="tgl_lahir_bidan"  value="<?php echo $bi->tgl_lahir_bidan; ?>" placeholder="">
            </div>
            
        <!-- /.box-body -->

        <div class="box-footer">
           <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
	<?php
	  }
	?>
	</div>
    <!-- /.box-body -->
    
    <!-- /.box-footer-->
</div>
</section>
<!-- /.box -->