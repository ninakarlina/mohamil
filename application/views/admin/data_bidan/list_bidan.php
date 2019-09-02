    <!-- Main content -->
        <!-- Main content -->
    <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i></i>Data Bidan</a></li>
      </ol>
    <section class="content">

      <!-- Default box -->
     <div class="box" style="overflow-x: auto">
            <div class="box-header">
              <h3 class="box-title">Data Bidan</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body" >
        <div class="row" style="margin-bottom: 10px" >
        <div class="col-md-2">
          <?php echo anchor(site_url('C_detil_bidann/form_input'),'Tambah', 'class="btn btn-primary"'); ?>
        </div>
        </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No HP</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                                
          <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no = 1;
          foreach ($bidan as $bi)
          {
        ?>
          <tr>
            <td width="50px"><?php echo $no++ ?></td>
            <td width="100px"><?php echo $bi->nama_bidan; ?></td>
             <td ><?php echo $bi->username; ?></td>
            <td><?php echo $bi->alamat_bidan; ?></td>
            <td><?php echo $bi->email; ?></td>
            <td><?php echo $bi->tlp_bidan; ?></td>
            <td><?php echo $bi->tempat_lahir_bidan; ?></td>
            <td><?php echo $bi->tgl_lahir_bidan; ?></td>
          
            
            <td width="150px">
          <?php
            echo anchor(site_url('C_detil_bidann/form_update/'.$bi->id_bidan),'<button type="button" class="btn btn-warning btn-xs">Ubah</button>'); 
            echo '&nbsp';
            echo anchor(site_url('C_detil_bidann/delete_bidan/'.$bi->id_bidan),'<button type="button" class="btn btn-danger btn-xs">Hapus</button>','onclick="javasciprt: return confirm(\'Hapus Data Bidan ?\')"'); 
          ?>
          </td>
            </div>
                </tr>  
        <?php
          }
        ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
        
          <!-- /.box -->
        </div>
      <!-- /.box -->
    </section>
    </section>
    <!-- /.content -->

