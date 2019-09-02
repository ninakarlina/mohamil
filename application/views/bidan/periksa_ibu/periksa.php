 <link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
  <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>

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
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Periksa Ibu Hamil</h3>
        </div> 
        <div class="box-body">
         <form class="navbar-form" role="search" action="<?php echo base_url()."C_Periksa/search";?>" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari Kode Ibu" name ="search" size="15px; ">
              <div class="input-group-btn">
                  <button class="btn btn-default " type="submit" value = "Search"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
         <form action="<?php echo base_url()."C_Periksa/insert"; ?>" method="POST">
          <?php foreach($ibu_hamil as $ibu_hamil){?>
          <section class="content">
            <!-- Default box -->
            <div class="box"> 
              <div class="box-header with-border">
                <h3 class="box-title">Catatan Ibu Hamil</h3>
              </div>
               
              <input type="hidden" class="form-control" placeholder="Cari Kode Ibu" name ="id_ibu" size="15px; " value="<?php echo $ibu_hamil->id_ibu;?>"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="kode_ibu">Kode</label>
                  <input type="text" class="form-control" name="kode_ibu" id="kode_ibu" placeholder="" required="" value="<?php echo $ibu_hamil->kode_ibu;?>" readonly>
                </div> 
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_ibu">Nama</label>
                  <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="" required="" value="<?php echo $ibu_hamil->nama_ibu; ?>" readonly>
                </div> 
              </div>
            </div>
          </section>   
          <section class="content">
      <!-- Default box -->
      <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Catatan Ibu Hamil</h3>

          </div> 
        <div class="box-body">
              <div class="box-body">
                <div class="form-group">
                  <label for="berat_badan">Berat Badan (Kg)</label>
                  <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Masukkan Berat Badan (Kg)" required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">
                  <label for="umur_kehamilan">Masukkan Usia Kehamilan (Minggu)</label>
                  <input type="text" class="form-control" name="umur_kehamilan" id="umur_kehamilan" placeholder="Masukkan Berapa Minggu Usia Kehamilan" required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">
                  <label for="letak_janin">Letak Janin (Kep/Su/Li)</label>
                  <input type="text" class="form-control" name="letak_janin" id="letak_janin" placeholder="Masukkan Letak Janin" required="">
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
                  <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" placeholder="" required="">
                </div>
                 <div class="form-group">
                  <label for="penolong_persalinan">Penolong Persalinan Terakhir</label>
                  <input type="text" class="form-control" name="penolong_persalinan" id="penolong_persalinan" placeholder="Masukkan Penolong Persalinan Terakhir" required="">
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