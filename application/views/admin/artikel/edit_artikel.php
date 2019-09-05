<!-- Default box -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><?php echo anchor(site_url('C_Tema'),'Tema'); ?></li>
      </ol>
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Artikel</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
           <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
	<?php foreach($artikel as $da){ ?>
    <form action="<?php echo base_url()."C_Tema/update_artikel"; ?>" method="POST" enctype="multipart/form-data">		 
        <div class="box-body">
           <div class="form-group">
              <!-- <label for="id_tema">Id Artikel</label> -->
              <input type="hidden" class="form-control" name="id_artikel"  value="<?php echo $da->id_artikel; ?>" id="id_artikel" placeholder="Id Artikel" >
            </div>
            <!-- <div class="form-group">
              <label for="tema">Tema</label>
              <input type="text" class="form-control" name="tema"  value="<?php echo $da->tema; ?>" id="tema" placeholder="Tema">
            </div> -->
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" name="judul"  value="<?php echo $da->judul; ?>" id="judul" placeholder="Judul" required="">
            </div>
            <div class="form-group">
              <label for="tgl">Tanggal</label>
              <input type="text" class="form-control" name="tgl"  value="<?php echo $da->tgl; ?>" id="tgl" placeholder="Tanggal">
            </div>
            <div class="form-group">
              <label for="isi_artikel">Isi</label>
              <textarea class="form-control" name="isi_artikel"  id="isi_artikel" required=""><?php echo $da->isi_artikel; ?></textarea>
            </div>
            <div class="form-group">
                  <label for="tema">Gambar</label> <br>
                  <small>format foto jpg / png</small>
                  <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
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
<!-- /.box -->

  