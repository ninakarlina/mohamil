    
    <!-- Main content -->
        <!-- Main content -->
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
    <section class="content">

      <!-- Default box -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Artikel</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php echo base_url()."C_Tema/save_artikel"; ?>" method="POST" enctype="multipart/form-data">    
              <div class="box-body">
                <!-- <div class="form-group">
                  <label for="id_tema">Id Artikel</label>
                  <input type="text" class="form-control" name="id_tema" id="id_tema" placeholder="Id Artikel">
                </div> -->
                <div class="form-group">
                  <label>Tema</label>
                  <select class="form-control" name="id_tema">
                  <?php foreach($tema as $tema){ ?>
                  <option value="<?php echo $tema['id_tema']; ?>"><?php echo $tema['tema']; ?>   </option>
                  <?php } ?>
                  </select>
                  <?php 
                    $a = date('Y-m-d');
                  ?>
                </div>
                <div class="form-group">
                  <label for="tema">Judul Artikel</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Artikel" required="">
                </div>
                <div class="form-group">
                  <label for="tgl">Tanggal</label>
                  <input type="text" class="form-control" name="tgl" id="tgl" placeholder='<?php echo $a; ?>' value='<?php echo $a; ?>' readonly>
                </div>
                <div class="form-group">
                  <label for="isi">Isi Artikel</label>
                  <textarea class="form-control" name="isi_artikel" rows="3" placeholder="Isi Artikel" required=""></textarea>
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
        <div class="row" style="margin-bottom: 10px">
        <!-- <div class="col-md-2">
          <?php echo anchor(site_url('C_Tema/add_artikel'),'Tambah', 'class="btn btn-primary"'); ?>
        </div> -->
        </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  
  
