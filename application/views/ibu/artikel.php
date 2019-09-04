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
		<div class="col-md-4">
    <div class="thumbnail">
      <a href="<?php echo base_url();?>C_ibu/artikel/<?php echo $row->id_artikel?>">
        <?php if (empty($row->gambar)){
			?>
			<img src="<?php echo base_url().'gambar/artikel.jpg';?>"style="width:50%">
			<?php
		}else{?>
		<img class="img-thumbnail rounded img-responsive float-left" style="max-height: 200px;" src="<?php echo base_url().'gambar/'.$row->gambar?>" alt="Lights" >
        <?php }?>
		<h3 class="box-title"><?php echo $row->judul?></span></h3></a>
        <p class="box-title"><?php echo $row->tema?> | <?php echo date('d-m-Y',strtotime($row->tgl));?></span></p>
		<p class="mb-4"><?php echo substr($row->isi_artikel,0,50); ?></p>
		<div class="caption text-right">
			<a class="btn btn-md btn-primary" href="<?php echo base_url();?>C_ibu/view/<?php echo $row->id_artikel?>" class="blog-btn btn">Read more</a>
        </div>
    </div>
  </div>
			<?php
				endforeach;?>
        </div>
        </div><!-- /.content -->
      </div>