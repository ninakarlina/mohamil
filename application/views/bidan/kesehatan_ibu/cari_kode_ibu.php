 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
       <li><a href="#"><i></i> Tambah Data Kesehatan Ibu</a></li>
      </ol>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Catatan Ibu Hamil</h3>
        </div> 
        <div class="box-body">
         <form class="navbar-form" role="search" action="<?php echo base_url()."C_detil_ibu/search";?>" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari Kode / Nama Ibu" name ="search" size="15px; ">
              <div class="input-group-btn">
                  <button class="btn btn-default " type="submit" value = "Search"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
         <form action="<?php echo base_url()."C_Kes_ibu/insert"; ?>" method="POST">
          <?php foreach($ibu_hamil as $ibu_hamil){?>
          <section class="content">
            <!-- Default box -->
            <div class="box"> 
              <div class="box-header with-border">
                <h3 class="box-title">Lengkapi Catatan Kesehatan Ibu</h3>
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
           <!--  </div>
          </section>  -->  
         <!--  <section class="content"> -->
      <!-- Default box -->
     <!--  <div class="box"> 
        <div class="box-body"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="hpht">HPHT</label>
                  <input type="date" class="form-control" name="hpht" id="hpht" onchange="myFunction(this.value)">
                </div>
                <div class="form-group">
                  <label for="htp">HTP</label>
                   <input type="text" name="htp" id="demo" class="form-control" readonly=" ">
                </div>
                <div class="form-group">
                  <label for="lila">Lila</label>
                  <input type="text" class="form-control" name="lila" id="lila" placeholder="Masukkan Angka" required="" onkeypress="return Angkasaja(event)">
                </div>
                 <div class="form-group">
                  <label for="tb">Tinggi Badan</label>
                  <input type="text" class="form-control" name="tb" id="tb" placeholder="Masukkan Angka" required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">
                  <label for="kontrasepsi_seb_hamil">Kontrasepsi Sebelum Kehamilan</label>
                  <input type="text" class="form-control" name="kontrasepsi_seb_hamil" id="kontrasepsi_seb_hamil" placeholder="Masukkan Kontrasepsi Sebelum Hamil" required="" >
                </div>
                <div class="form-group">
                  <label for="riwayat_penyakit">Riwayat Penyakit</label>
                  <input type="text" class="form-control" name="riwayat_penyakit" id="riwayat_penyakit" placeholder="Masukkan Riwayat Penyakit" required="">
                </div>
                <div class="form-group">
                  <label for="riwayat_alergi">Riwayat Alergi</label>
                  <input type="text" class="form-control" name="riwayat_alergi" id="riwayat_alergi" placeholder="Masukkan Riwayat Alergi" required="">
                </div>
                 <div class="form-group">
                  <label for="jml_persalinan">Jumlah Persalinan</label>
                  <input type="text" class="form-control" name="jml_persalinan" id="jml_persalinan" placeholder="Masukkan Angka" required="" onkeypress="return Angkasaja(event)">
                </div>
                 <div class="form-group">
                  <label for="jml_abortus">Jumlah Abortus</label>
                  <input type="text" class="form-control" name="jml_abortus" id="jml_abortus" placeholder="Masukkan Angka" required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">
                  <label for="jml_anak_hidup">Jumlah Anak Hidup</label>
                  <input type="text" class="form-control" name="jml_anak_hidup" id="jml_anak_hidup" placeholder="Masukkan Angka" required="" onkeypress="return Angkasaja(event)">
                </div>
                 <div class="form-group">
                  <label for="jml_premature">Jumlah Anak Lahir Premature</label>
                  <input type="text" class="form-control" name="jml_premature" id="jml_premature" placeholder="Masukkan Angka" required="" onkeypress="return Angkasaja(event)">
                </div>
                 <div class="form-group">
                  <label for="jarak_hamil_persalinan_terakhir">Jarak Hamil Persalinan Terakhir</label>
                  <input type="date" class="form-control" name="jarak_hamil_persalinan_terakhir" id="jarak_hamil_persalinan_terakhir" placeholder="" required="">
                </div>
                 <div class="form-group">
                  <label for="status_imun_akhir">Status Imunisasi TT Terakhir</label>
                  <input type="text" class="form-control" name="status_imun_akhir" id="status_imun_akhir" placeholder="Masukkan Tahun Imunisasi Terakhir" required="">
                </div>
                 <div class="form-group">
                  <label for="penolong_persalinan">Penolong Persalinan Terakhir</label>
                  <input type="text" class="form-control" name="penolong_persalinan" id="penolong_persalinan" placeholder="Masukkan Penolong Persalinan Terakhir" required="">
                </div>
                 <div class="form-group">
                  <label for="cara_persalinan_akhir">Cara Persalinan Terakhir</label>
                  <input type="text" class="form-control" name="cara_persalinan_akhir" id="cara_persalinan_akhir" placeholder="Masukkan Cara Persalinan Terakhir" required="">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/bower_components/jquery/dist/moment.js')?>"></script>
<script type="text/JavaScript"> 
  
// Function is called, return  
// value will end up in x 
// Function returns the product of a and b 
function myFunction(a) { 
  var x = a;  
  var dt = new Date(x);  
  var bulan = dt.getMonth();
  var hari = dt.getDate();
  var year = dt.getFullYear();
  
  var rumus_bulan = bulan - 3;
  var rumus_year = year + 1;
  var rumus_hari = hari + 7;

  //set
  var d = new Date();
  d.setDate(rumus_hari);
  var set_bulan   = new Date();
  d.setMonth(rumus_bulan);
  var set_year  = new Date();
  d.setFullYear(rumus_year);
  var data_tanggal = moment(d).format('YYYY/MM/DD')
    document.getElementById("demo").value = data_tanggal;             
} 
</script> 
<!-- <script type="text/javascript">
   function ambildata()
  {
    $( "#tayang" ){

    }
  }
</script> -->