<!-- Default box -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><?php echo anchor(site_url('C_Tema'),'Tema', 'Edit Tema'); ?></li>
      </ol>
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">EDIT TEMA</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
           <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
	<?php foreach($tema as $tem){ ?>
    <form action="<?php echo base_url()."C_Tema/update"; ?>" method="POST">		 
        <div class="box-body">
           <div class="form-group">
              <!-- <label for="id_artikel">Id Artikel</label> -->
              <input type="hidden" class="form-control" name="id_tema"  value="<?php echo $tem->id_tema; ?>" id="id_tema" placeholder="Id Tema" >
            </div>
            <div class="form-group">
              <label for="tema">Tema</label>
              <input type="text" class="form-control" name="tema"  value="<?php echo $tem->tema; ?>" id="tema" placeholder="Tema">
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

  