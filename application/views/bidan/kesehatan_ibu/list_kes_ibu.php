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
        <li><a href="#"><i></i>Kesehatan Ibu</a></li>
      </ol>
    <section class="content">

      <!-- Default box -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kesehatan Ibu Hamil</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body">
        <div class="row" style="margin-bottom: 10px">
        <div class="col-md-2">
          <?php echo anchor(site_url('C_detil_ibu/search'),'Tambah', 'class="btn btn-primary"'); ?>
        </div>    
        </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>No</th>
                  <th>Kode Ibu</th>
                  <th>Nama Ibu</th>
                  <th>HPHT</th>
                  <th>HTP</th>
                  <th>Lila</th>
                  <th>Tingi Badan</th>
  <!--                   <th>Riwayat Penyakit</th>
                    <th>Riwayat Alergi</th> -->
                                
          <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no = 1;
          foreach ($catatan_kes_ibu as $ca)
          {
        ?>
          <tr>
            <td width="50px"><?php echo $no++ ?></td>
            <td><?php echo $ca->kode_ibu; ?></td>
            <td><?php echo $ca->nama_ibu; ?></td>
            <td><?php echo $ca->hpht; ?></td>
            <td><?php echo $ca->htp; ?></td>
            <td><?php echo $ca->lila; ?></td>
            <td><?php echo $ca->tb; ?></td>
<!--             <td><?php echo $ca->riwayat_penyakit; ?></td>
            <td><?php echo $ca->riwayat_alergi; ?></td> -->
            
            <td>
          <?php
            // echo anchor(site_url('C_detil_ibu/form_update/'.$bu->id_ibu),'<button type="button" class="btn btn-success btn-xs">Periksa</button>'); 
            // echo '&nbsp'; 
            echo anchor(site_url('C_Kes_ibu/read/'.$ca->id_kes_ibu),'<button type="button" class="btn btn-info btn-xs">Detail</button>'); 
            echo '&nbsp'; 
            echo anchor(site_url('C_Kes_ibu/form_update/'.$ca->id_kes_ibu),'<button type="button" class="btn btn-warning btn-xs">Ubah</button>'); 
            echo '&nbsp';
            echo anchor(site_url('C_Kes_ibu/delete_data/'.$ca->id_kes_ibu),'<button type="button" class="btn btn-danger btn-xs">Hapus</button>','onclick="javasciprt: return confirm(\'Hapus Data Ibu ?\')"'); 
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
  
