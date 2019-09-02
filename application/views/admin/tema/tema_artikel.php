    
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
              <h3 class="box-title">Tema Artikel</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body">
        <div class="row" style="margin-bottom: 10px">
        <div class="col-md-2">
          <?php echo anchor(site_url('C_Tema/form_input'),'Tambah', 'class="btn btn-primary"'); ?>
        </div>
        </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>No</th>
                  <th>Tema</th>
                
          <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no = 1;
          foreach ($tema as $tem)
          {
        ?>
          <tr>
            <td width="50px"><?php echo $no++ ?></td>
            <td><?php echo $tem->tema; ?></td>
               
            <td>
          <?php
            echo anchor(site_url('C_Tema/form_update/'.$tem->id_tema),'<button type="button" class="btn btn-warning btn-xs">Ubah</button>'); 
            echo '&nbsp';
            echo anchor(site_url('C_Tema/delete/'.$tem->id_tema),'<button type="button" class="btn btn-danger btn-xs">Hapus</button>','onclick="javasciprt: return confirm(\'Hapus Tema ?\')"'); 
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
  
  
