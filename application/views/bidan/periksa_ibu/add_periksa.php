<?php foreach ($hpht as $tanggal) {
  
    $date1 = new DateTime($tanggal->hpht);
    $date2 = new DateTime("now");
    $interval = $date1->diff($date2);
    // print_r($interval->days % 7);

    // echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

    // echo "difference " . $interval->days . " days ";


}

$dt1 = $tanggal->hpht;
$dt2 = date("Y-m-d");

$weeks = week_between_two_dates($dt1, $dt2);

if($weeks <= 12){
  $tanggal_kembali = date('Y-m-d', strtotime('+1 month'));
}
elseif($weeks <= 28){
  $tanggal_kembali = date('Y-m-d', strtotime('+2 week'));
}
elseif($weeks <= 40){
  $tanggal_kembali = date('Y-m-d', strtotime('+1 week'));
}
// print_r($tanggal_kembali);

function week_between_two_dates($date1, $date2)
  {
      $first = DateTime::createFromFormat('Y-m-d', $date1);
      $second = DateTime::createFromFormat('Y-m-d', $date2);
      if($date1 > $date2) return week_between_two_dates($date2, $date1);
      return floor($first->diff($second)->days/7);
  }
?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
       <li><a href="#"><i></i>Monitoring Ibu</a></li>
      </ol>

    <!-- Main content -->
    <section class="content">
	<div class="row">
	<div class="col-sm-4">
	<div class="box box-solid bg-teal-gradient">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Berat Badan</h3>
                  <div class="box-tools pull-right">
                    <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div><!-- /.box-body -->
                <div class="box-footer no-border">
                  <div class="row">
                   <!-- ./col -->
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div>
     </div>
	<div class="col-sm-4">
	<div class="box box-solid bg-teal-gradient">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Tinggi Fundus</h3>
                  <div class="box-tools pull-right">
                    <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart2" style="height: 250px;"></div>
                </div><!-- /.box-body -->
                <div class="box-footer no-border">
                  <div class="row">
                   <!-- ./col -->
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div>
     </div>
      <div class="col-sm-4">
  <div class="box box-solid bg-teal-gradient">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Denyut Jantung Bayi</h3>
                  <div class="box-tools pull-right">
                    <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart3" style="height: 250px;"></div>
                </div><!-- /.box-body -->
                <div class="box-footer no-border">
                  <div class="row">
                   <!-- ./col -->
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div>
     </div>
			<!-- Morris.js charts -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap_bar/css/style.css" />
                
	<!--Load chart js
				

    <script src="<?php echo base_url().'assetss/morris/js/jquery.min.js'?>"></script>
	-->
    <script src="<?php echo base_url().'assetss/morris//js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assetss/morris/js/morris.min.js'?>"></script>
    <script>
        
		 // LINE CHART
        var line = new Morris.Line({
          element: 'line-chart',
          resize: true,
          data: <?php echo $data;?>,
          xkey: 'tgl_periksa',
          ykeys: ['berat_badan'],
          labels: ['berat badan'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });
		var line2 = new Morris.Line({
          element: 'line-chart2',
          resize: true,
          data: <?php echo $darah;?>,
          xkey: 'tgl_periksa',
          ykeys: ['tinggi_fundus'],
          labels: ['Tinggi Fundus'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });
        var line3 = new Morris.Line({
          element: 'line-chart3',
          resize: true,
          data: <?php echo $jantung;?>,
          xkey: 'tgl_periksa',
          ykeys: ['denyut_jantung_bayi'],
          labels: ['Denyut Jantung Bayi'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });
    </script>
         <!-- /.col -->
       
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

         <!-- /.col -->
        <!-- /.col -->
      </div>
      
      <!-- Default box -->
      
       <section class="content">
        <div class="row">
        <div class="col-md-3">
         <form action="<?php echo base_url()."C_Periksa/insert"; ?>" method="POST">
          <?php foreach($alle as $ibu_hamil){?>
          
            <!-- Default box -->
            <div class="box"> 
              <div class="box-header with-border">
                <h3 class="box-title">Periksa Ibu</h3>
              </div>
               
              <input type="hidden" class="form-control" placeholder="Cari Kode Ibu" name ="id_ibu" size="15px; " value="<?php echo $ibu_hamil->id_ibu;?>"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="kode_ibu">Kode</label>
                  <input type="text" class="form-control" name="kode_ibu" id="kode_ibu" placeholder="" required="" value="<?php echo $ibu_hamil->kode_ibu;?>" readonly>
                </div> 
                <div class="form-group">
                  <label for="nama_ibu">Nama</label>
                  <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="" required="" value="<?php echo $ibu_hamil->nama_ibu; ?>" readonly>
                </div> 
              </div>
            </div>
             <div>
          
            <!-- Default box -->
            <div class="box"> 
              <div class="box" style="overflow-x: auto">
        <div class="box-header with-border">
          <h3 class="box-title">List Pemeriksaan</h3>
        </div> 
        <div class="box-body">
           <table class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>No</th>
                  <th>Tangal Periksa</th>
                  <th>Tekanan Darah</th>
                   <th>Umur Kehamilan</th>
                  
                 </tr>
                </thead>
                <tbody>
        <?php
          $no = 1;
          foreach ($all as $bu)
          {
        ?>
          <tr>
            <td width="50px"><?php echo $no++ ?></td>
            <td><?php echo $bu->tgl_periksa; ?></td>
            <td><?php echo $bu->tekanan_darah; ?></td>
            <td><?php echo $bu->umur_kehamilan; ?></td>

          </tr>  
        <?php
          }
        ?>
                </tfoot>
              </table>
           
        </div>
      </div>  
            </div>
          
        </div>
        </div>
      
         
      <div class="col-md-9">
                  <!-- Default box -->
      <div class="box">
        <div class="box-body">
              <div class="box-body">
                <div class="form-group">
                  <label for="berat_badan">Berat Badan (Kg)</label>
                  <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Masukkan Berat Badan (Kg)" required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">
                  <label for="umur_kehamilan">Masukkan Usia Kehamilan (Minggu)</label>
                  <input type="text" class="form-control" name="umur_kehamilan" id="umur_kehamilan" value="<?php echo $weeks." Minggu, ".$interval->days % 7 ." Hari ";  ?>" required="" disabled="">
                </div>
               <div class="form-group">
                <label>Letak Janin</label>
                 <select class="form-control" name="letak_janin" > 
                            <option disabled diselected>-- Pilih --</option>
                            <option value="-">-</option>
                            <option value="Kepala">Kepala</option>
                            <option value="Sungsang">Sungsang</option>
                            <option value="Melintang">Melintang</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label for="tinggi_fundus">Tinggi Fundus (Cm)</label>
                  <input type="text" class="form-control" name="tinggi_fundus" id="tinggi_fundus" placeholder="Masukkan Tinggi Fundus (Cm)" required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">
                  <label for="keluhan">Keluhan</label>
                  <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Masukkan Keluhan Ibu Hamil" required="" >
                </div>
                <div class="form-group">
                  <label for="tekanan_darah">Tekanan Darah (mmHg)</label>
                  <input type="text" class="form-control" name="tekanan_darah" id="tekanan_darah" placeholder="Masukkan Tekanan Darah" required="" >
                </div>
                <div class="form-group">
                  <label for="denyut_jantung_bayi">Denyut Jantung Janin / Menit</label>
                  <input type="text" class="form-control" name="denyut_jantung_bayi" id="denyut_jantung_bayi" placeholder="Masukkan Denyut Jantung Janin" required="">
                </div>
                 <div class="form-group">        
                  <label>Kaki Bengkak</label>
                  <select class="form-control" name="kaki_bengkak">
                            <option disabled diselected>-- Pilih --</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label for="hasil_lab">Hasil Pemeriksaan Laboratorium</label>
                  <input type="text" class="form-control" name="hasil_lab" id="hasil_lab" placeholder="Masukkan Hasil Pemeriksaan Laboratorium" required="" >
                </div>
                <div class="form-group">
                  <label for="tindakan">Tindakan (Pemberian TT, Fe, terapi, rujukan, umpan balik)</label>
                  <input type="text" class="form-control" name="tindakan" id="tindakan" placeholder="Masukkan Tindakan Untuk Ibu Hamil" required="" >
                </div>
                 <div class="form-group">
                  <label for="nasehat">Nasihat</label>
                  <input type="text" class="form-control" name="nasehat" id="nasehat" placeholder="Masukkan Nasehat" required="">
                </div>
                <?php 
                    $a = date('Y-m-d');
                  ?>
                <div class="form-group">
                  <label for="tgl_periksa">Tanggal Periksa</label>
                  <input type="text" class="form-control" name="tgl_periksa" id="tgl_periksa" placeholder='<?php echo $a; ?>' value='<?php echo $a; ?>' readonly>
                </div>
                 <div class="form-group">
                  <label for="tgl_kembali">Tanggal Kembali</label>
                  <input type="text" class="form-control" name="tgl_kembali" id="tgl_kembali" required="" disabled="" value="<?= $tanggal_kembali; ?>">
                </div>
                 <div class="form-group">
                  <input type="hidden" class="form-control" name="id_bidan" id="id_bidan" placeholder="" required="">
                </div>

              <!-- /.box-body --> 
            </div>
            
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            
        </div>
      </div>
</div>


    </div>
 
</section>
</form>
<?php }?>
        </div>
      </div>  
    </div>
  </div>
</section>
<script type="text/javascript">
function Angkasaja(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</script>
<!-- <script type="text/javascript">
   function ambildata()
  {
    $( "#tayang" ){

    }
  }
</script> -->