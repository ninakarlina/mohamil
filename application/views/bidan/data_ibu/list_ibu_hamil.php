    <!-- Main content -->
        <!-- Main content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a><i></i>Pemeriksaan Ibu</a></li>
      </ol>
      
  
    <section class="content">

      <!-- Default box -->
     <div class="box" style="overflow-x: auto">
            <div class="box-header">
              <h3 class="box-title">Data Ibu Hamil</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body">
        
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>No</th>
                  <th>Kode Ibu</th>
                  <th>Nama</th>
                  <th>Alamat Rumah</th>
                  <th>Nama Suami</th>
                                
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
            <td><?php echo $bu->alamat_rumah; ?></td>
            <td><?php echo $bu->nama_suami; ?></td>
            
            <td>
          <?php

            echo anchor(site_url('C_periksa/form_add/'.$bu->id_ibu),'<button type="button" class="btn btn-info btn-xs">Periksa</button>'); 
            echo '&nbsp';
			echo anchor(site_url('C_periksa/riwayat/'.$bu->id_ibu),'<button type="button" class="btn btn-warning btn-xs">Riwayat</button>'); 
             
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
  
