    
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
              <h3 class="box-title">Artikel</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body">
        <div class="row" style="margin-bottom: 10px">
        <div class="col-md-2">
          <?php echo anchor(site_url('C_Tema/add_artikel'),'Tambah', 'class="btn btn-primary"'); ?>
        </div>
        </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>No</th>
                  <!-- <th>Id Artikel</th> -->
                  <th>Tema</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Isi</th>
                  <th>Gambar</th>
                
          <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no = 1;
          foreach ($artikel as $da)
          {
        ?>
          <tr>
            <td width="50px"><?php echo $no++ ?></td>
            <!-- <td><?php echo $tema->id_artikel ?></td> -->
            <td width="200px"><?php echo $da->tema; ?></td>
            <td><?php echo $da->judul; ?></td>
            <td><?php echo $da->tgl; ?></td>
            <td width="500px"><?php echo $da->isi_artikel; ?></td>
            <td><?php echo $da->gambar; ?></td>
            <td>

          <?php
            echo anchor(site_url('C_Tema/form_update_artikel/'.$da->id_artikel),'<button type="button" class="btn btn-warning btn-xs">Ubah</button>'); 
            echo '&nbsp';
            echo anchor(site_url('C_Tema/delete_artikel/'.$da->id_artikel),'<button type="button" class="btn btn-danger btn-xs">Hapus</button>','onclick="javasciprt: return confirm(\'Hapus Artikel ?\')"'); 
          ?>
          </td>
                </tr>  
        <?php
          }
        ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  
  
