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
              <h3 class="box-title">Pendaftaran periksa ibu hamil</h3>
            </div>
      
            <!-- /.box-header -->
            <div class="box-body">
        <div class="row" style="margin-bottom: 10px">
          <div class="col-md-3" style="float: right;position: relative; right: 2%;">
          <div class="form-group">
                <label>Cek history hari lain</label>
                <div class="row">
                  <form  action="<?php echo base_url()."C_Daftar/history"; ?>" method="POST">
                    <div class="col-md-9" style="padding-right: 5px">
                      <input style="height: 30px;line-height: 15px; width: 100%;" class="datepicker" name="tanggal_history">
                    </div>
                    <div class="col-md-2" style="padding-left: 0px;position: relative;top: -2px;">
                      <button type="submit" class="btn btn-primary">Check!</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>


          <div class="col-md-6">
            <?php
                if ($this->session->flashdata('message')) {
                    echo "<div class='card-body'>";
                    // echo "<div class='alert alert-primary' role ='alert'>";
                    // echo "<span class='badge badge-pill badge-primary'>Gagal</span>";
                    echo $this->session->flashdata('message');
                    // echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    //         <span aria-hidden='true'>&times;</span>
                    //       </button>";
                    // echo "</div>";
                    echo "</div>";
                }
              ?>
            <form action="<?php echo base_url()."C_Daftar/insert"; ?>" method="POST">
            <div class="form-group">
                  <label>Cari Nama Ibu</label>
                  <select class="form-control select2" style="width: 100%;" name="ibu">
                    <option value="null">-- List Ibu hamil --</option>
                    <?php
                      foreach ($ibu_hamil as $bu)
                      {
                    ?>
                    <option><?php echo $bu->nama_ibu; ?></option>
                    <?php
                      }
                    ?>
                  </select>
            </div>
            <button type="submit" class="btn btn-success">Daftarkan!</button>
          </div>
          </form>
        </div>

        <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat Rumah</th>
                  <th>No Telepon</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no = 1;
          $data = 0;
          $history_tanggal = $tanggal['tanggal'];
          print_r($history_tanggal);
          foreach ($daftar_periksa as $list)
          {
            if ($list->tgl_daftar == $history_tanggal) {
        ?>
         <tr>
            <td width="50px"><?php echo $no++ ?></td>
            <td><?php echo $list->nama_ibu; ?></td>
            <td><?php echo $list->tgl_lahir_ibu; ?></td>
            <td><?php echo $list->alamat_rumah; ?></td>
            <td><?php echo $list->no_tlp; ?></td>
            
            <td>
              <?php
              if ($list->id_bidan == null) {
                echo "<button type='button' class='btn btn-warning btn-xs'>Menunggu</button>";
              }
              else {
                echo "<button type='button' class='btn btn-success btn-xs'>Sudah Diperiksa</button>";
              }
               ?>
          <?php

            // echo anchor(site_url('C_detil_ibu/read/'.$bu->id_ibu),'<button type="button" class="btn btn-info btn-xs">Detail</button>'); 
            // echo '&nbsp'; 
            // echo anchor(site_url('C_detil_ibu/form_update/'.$bu->id_ibu),'<button type="button" class="btn btn-warning btn-xs">Ubah</button>'); 
            // echo '&nbsp';
            // echo anchor(site_url('C_detil_ibu/delete_ibu/'.$bu->id_ibu),'<button type="button" class="btn btn-danger btn-xs">Hapus</button>','onclick="javasciprt: return confirm(\'Hapus Data Ibu ?\')"'); 
          ?>
          </td>
                </tr>  
        <?php
            }
            $data++;
          }

          if ($data == 0) {
            echo "<tr style='text-align: center;'><td colspan='6'> Tidak ada data </td></tr>";
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
  
