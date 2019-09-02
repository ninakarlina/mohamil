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
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemeriksaan Ibu Hamil</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body">
        <div class="row" style="margin-bottom: 10px">
        <div class="col-md-2">
          <?php echo anchor(site_url('C_Periksa/form_input'),'Tambah', 'class="btn btn-primary"'); ?>
        </div>
        </div>
             <table id="dataTables3" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
          <th>No</th>
                  <th>Kode Ibu</th>
                  <th>Nama Ibu</th>
                  <th>Berat Badan</th>
                  <th>Umur Kehamilan</th>
                  <th>Letak Janin</th>
                  <th>Tinggi Fundus</th>
                  <th>Keluhan</th>
                                
          <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no = 1;
          foreach ($tb_periksa_ibu as $p)
          {
        ?>
          <tr>
            <td width="50px"><?php echo $no++ ?></td>
            <td><?php echo $p->kode_ibu; ?></td>
            <td><?php echo $p->nama_ibu; ?></td>
            <td><?php echo $p->berat_badan; ?></td>
            <td><?php echo $p->umur_kehamilan; ?></td>
            <td><?php echo $p->letak_janin; ?></td>
            <td><?php echo $p->tinggi_fundus; ?></td>
            <td><?php echo $p->keluhan; ?></td>
            
            <td>
          <?php
            // echo anchor(site_url('C_detil_ibu/form_update/'.$bu->id_ibu),'<button type="button" class="btn btn-success btn-xs">Periksa</button>'); 
            // echo '&nbsp'; 
            echo anchor(site_url('C_detil_ibu/read/'.$p->id_periksa_ibu),'<button type="button" class="btn btn-info btn-xs">Detail</button>'); 
            echo '&nbsp'; 
            echo anchor(site_url('C_detil_ibu/form_update/'.$p->id_ibu),'<button type="button" class="btn btn-warning btn-xs">Ubah</button>'); 
            echo '&nbsp';
            echo anchor(site_url('C_detil_ibu/delete_ibu/'.$p->id_ibu),'<button type="button" class="btn btn-danger btn-xs">Hapus</button>','onclick="javasciprt: return confirm(\'Hapus Data Ibu ?\')"'); 
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
  
