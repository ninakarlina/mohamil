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
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Riwayat Ibu Hamil</h3>
        </div> 
        <div class="box-body">
           <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
          <th>No</th>
                  <th>Nama Ibu</th>
                  <th>Umur Kehamilan</th>
                  <th>Letak Janin</th>
                  <th>Tinggi Fundus</th>
                  <th>Keluhan</th>
                  <th>Kaki Bengkak</th>
                  <th>Hasil Lab</th>
                  <th>Tindakan</th>
                  <th>Nasehat</th>
                  <th>Tanggal Periksa</th>
                  <th>Tanggal Kembali</th>
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
            <td><?php echo $bu->nama_ibu; ?></td>
            <td><?php echo $bu->umur_kehamilan; ?></td>
            <td><?php echo $bu->letak_janin; ?></td>
            <td><?php echo $bu->tinggi_fundus; ?></td>
            <td><?php echo $bu->keluhan; ?></td>
            <td><?php echo $bu->kaki_bengkak; ?></td>
            <td><?php echo $bu->hasil_lab; ?></td>
            <td><?php echo $bu->tindakan; ?></td>
            <td><?php echo $bu->nasehat; ?></td>
            <td><?php echo $bu->tgl_periksa; ?></td>
            <td><?php echo $bu->tgl_kembali; ?></td>

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