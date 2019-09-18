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
        <li><a href="#"><i></i>Ibu</a></li>
      </ol>
      
  
    <section class="content">

      <!-- Default box -->
     <div class="box" style="overflow-x: auto">
            <div class="box-header">
              <h3 class="box-title">Data Ibu Hamil</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body">
        <div class="row" style="margin-bottom: 10px">
        <div class="col-md-6">
          <?php echo anchor(site_url('C_detil_ibu/form_input'),'Tambah', 'class="btn btn-primary"'); ?>
        </div>
        </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>No</th>
                  <th>Kode Ibu</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat Rumah</th>
                  <th>No Telepon</th>
                                
          <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no = 1;
          foreach ($ibu_hamil as $bu)
          {
        ?>
          <tr>
            <td width="50px"><?php echo $no++ ?></td>
            <td><?php echo $bu->kode_ibu; ?></td>
            <td><?php echo $bu->nama_ibu; ?></td>
            <td><?php echo $bu->username; ?></td>
            <td><?php echo $bu->email; ?></td>
            <td><?php echo $bu->tempat_lahir_ibu; ?></td>
            <td><?php echo $bu->tgl_lahir_ibu; ?></td>
            <td><?php echo $bu->alamat_rumah; ?></td>
            <td><?php echo $bu->no_tlp; ?></td>
            
            <td>
          <?php

            echo anchor(site_url('C_detil_ibu/cetak/'.$bu->id_ibu),'<button type="button" class="btn btn-info btn-xs">Cetak</button>'); 
            echo '&nbsp'; 
            echo anchor(site_url('C_detil_ibu/form_update/'.$bu->id_ibu),'<button type="button" class="btn btn-warning btn-xs">Ubah</button>'); 
            echo '&nbsp';
            echo anchor(site_url('C_detil_ibu/delete_ibu/'.$bu->id_ibu),'<button type="button" class="btn btn-danger btn-xs">Hapus</button>','onclick="javasciprt: return confirm(\'Hapus Data Ibu ?\')"'); 
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
  
