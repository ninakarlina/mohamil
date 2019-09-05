<div class="content-wrapper" style="min-height: 400px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <h1>
            Artikel Ibu Hamil
            <small>Mohamil</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Artikel</li>
          </ol>
        </div>

        <!-- Main content -->
    <div class="content body">
		<div class="row">
		<?php $no=1; 
				foreach($x as $row):
				$no++; 
		?>
		<div class="col-md-12">
    <div class="box box-primary">
      <p class="text-left">
	  <a href="<?php echo base_url().'gambar/'.$row->gambar?>">
        <?php if (empty($row->gambar)){
			?>
			<img src="<?php echo base_url().'gambar/artikel.jpg';?>"style="width:50%">
			<?php
		}else{?>
		<img class="img-thumbnail rounded img-responsive float-left" style="max-height: 200px;" src="<?php echo base_url().'gambar/'.$row->gambar?>" alt="Lights" >
        <?php }?>
		</p>
		<h3 class="box-title"><?php echo $row->judul?></span></h3></a>
        <p class="box-title"><?php echo $row->tema?> | <?php echo date('d-m-Y',strtotime($row->tgl));?></span></p>
		<p class="mb-4"><?php echo $row->isi_artikel; ?></p>
		
    </div>
  </div>

			<?php
				endforeach;?>
        </div>
        </div><!-- /.content -->
      </div>