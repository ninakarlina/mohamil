<!-- Default box -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i></i> Detail Ibu</a></li>
      </ol>

 <br><br>
 <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#ibu" data-toggle="tab">Data Ibu Hamil</a></li>
              <li><a href="#suami" data-toggle="tab">Data Suami</a></li>
              <li><a href="#alamat" data-toggle="tab">Alamat</a></li>
               <li><a href="#kes_ibu" data-toggle="tab">Kesehatan Ibu</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="ibu">
                <!-- Post -->
               <div class="box-body"> 
          <?php foreach($ibu_hamil as $bu){ ?>
         <form action="" method="POST">    
              <div class="box-body">
                <input type="hidden" class="form-control" name="id_ibu" placeholder="" value="<?php echo $bu->id_ibu; ?>">
                <input type="hidden" class="form-control" name="id_user" placeholder="" value="<?php echo $bu->id_user; ?>">
                <div class="form-group">
                  <label for="kode_ibu">Kode Ibu</label>
                  <input type="text" class="form-control" name="kode_ibu" value="<?php echo $kode; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="nama_ibu">Nama</label>
                  <input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan Nama" disabled disabled required="" value="<?php echo $bu->nama_ibu; ?>">
                </div>
                  <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username" disabled required="" value="<?php echo $bu->username; ?>">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Masukkan Password" disabled required="" value="<?php echo $bu->password; ?>">
                </div>
                 <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan email" disabled required="" value="<?php echo $bu->email; ?>">
                </div>
                <div class="form-group">        
                  <input type="text" name="level" disabled required="" value="ibu" hidden="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir_ibu">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir" disabled required="" value="<?php echo $bu->tempat_lahir_ibu; ?>">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir_ibu">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir_ibu" placeholder="" disabled required="" value="<?php echo $bu->tgl_lahir_ibu; ?>">
                </div>
                <div class="form-group">
                  <label for="kehamilan_ke">Kehamilan Ke</label>
                  <input type="text" class="form-control" name="kehamilan_ke" id="kehamilan_ke" value="<?php echo $bu->kehamilan_ke; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">        
                  <label>Agama</label>
                 <input type="text" class="form-control" name="kehamilan_ke" id="kehamilan_ke" value="<?php echo $bu->agama_ibu; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                
                </div>
                <div class="form-group">
                  <label for="pendidikan_ibu">Pendidikan</label>
                  <input type="text" class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" value="<?php echo $bu->pendidikan_ibu; ?>" disabled required="">
                </div>
                <div class="form-group">
                <label>Golongan Darah</label>
                  <input type="text" class="form-control" name="goldar_ibu" id="kehamilan_ke" value="<?php echo $bu->goldar_ibu; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                
                </div>
                <div class="form-group">
                  <label for="pekerjaan_ibu">Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?php echo $bu->pekerjaan_ibu; ?>" disabled required="">
                </div>
              <!-- /.box-body --> 
            </div>
            </div>
               
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="suami">
                <!-- The timeline -->
                <div class="box-body">
                <div class="form-group">
                  <label for="nama_suami">Nama Suami</label>
                  <input type="text" class="form-control" name="nama_suami" id="nama_suami" value="<?php echo $bu->nama_suami; ?>" disabled required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir_suami">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir_suami" id="tempat_lahir_suami" value="<?php echo $bu->tempat_lahir_suami; ?>" disabled required="">
                </div>
                <div class="form-group">
                 <label>Agama</label>
                 <input type="text" class="form-control" name="kehamilan_ke" id="kehamilan_ke" value="<?php echo $bu->agama_suami; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                
                </div>
                <div class="form-group">
                  <label for="pendidikan_suami">Pendidikan</label>
                  <input type="text" class="form-control" name="pendidikan_suami" id="pendidikan_suami" value="<?php echo $bu->pendidikan_suami; ?>" disabled required="">
                </div>
               <div class="form-group">
                <label>Golongan Darah</label>
                 <input type="text" class="form-control" name="kehamilan_ke" id="kehamilan_ke" value="<?php echo $bu->goldar_suami; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                
                </div>
                <div class="form-group">
                  <label for="pekerjaan_suami">Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan_suami" id="pekerjaan_suami" value="<?php echo $bu->pekerjaan_suami; ?>" disabled required="">
                </div>
              </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="alamat">
                <div class="box-body">
                <div class="form-group">
                  <label for="alamat_rumah">Alamat Rumah</label>
                  <input type="text" class="form-control" name="alamat_rumah" id="alamat_rumah" value="<?php echo $bu->alamat_rumah; ?>" disabled required="">
                </div>
                <div class="form-group">
                  <label for="kecamatan">Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?php echo $bu->kecamatan; ?>" disabled required="">
                </div>
                <div class="form-group">
                  <label for="kabupaten">Kabupaten</label>
                  <input type="text" class="form-control" name="kabupaten" id="kabupaten" value="<?php echo $bu->kabupaten; ?>" disabled required="">
                </div>
                <div class="form-group">
                  <label for="no_tlp">Nomor HP</label>
                  <input type="text" class="form-control" name="no_tlp" id="no_tlp" value="<?php echo $bu->no_tlp; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                </div>
              <!-- /.box-body -->
            </div>
              </div>
              <?php } ?>

              <?php foreach($catatan_kes_ibu as $b){ ?>
              <div class="tab-pane" id="kes_ibu">
                <div class="box-body">
                <div class="form-group">
                  <label for="hpht">HPHT</label>
                  <input type="date" class="form-control" name="hpht" id="hpht" disabled value="<?php echo $b->hpht; ?>" onchange="myFunction(this.value)">
                </div>
                <div class="form-group">
                  <label for="htp">HTP</label>
                   <input type="text" name="htp" id="demo" class="form-control" value="<?php echo $b->htp; ?>" readonly=" ">
                </div>
                <div class="form-group">
                  <label for="lila">Lingkar Lengan Atas</label>
                  <input type="text" class="form-control" name="lila" id="lila" value="<?php echo $b->lila; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                </div>
                 <div class="form-group">
                  <label for="tb">Tinggi Badan</label>
                  <input type="text" class="form-control" name="tb" id="tb" value="<?php echo $b->tb; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">
                  <label for="kontrasepsi_seb_hamil">Kontrasepsi Sebelum Kehamilan</label>
                  <input type="text" class="form-control" name="kontrasepsi_seb_hamil" id="kontrasepsi_seb_hamil" value="<?php echo $b->kontrasepsi_seb_hamil; ?>" disabled required="" >
                </div>
                <div class="form-group">
                  <label for="riwayat_penyakit">Riwayat Penyakit</label>
                  <input type="text" class="form-control" name="riwayat_penyakit" id="riwayat_penyakit" value="<?php echo $b->riwayat_penyakit; ?>"disabled required="">
                </div>
                <div class="form-group">
                  <label for="riwayat_alergi">Riwayat Alergi</label>
                  <input type="text" class="form-control" name="riwayat_alergi" id="riwayat_alergi" value="<?php echo $b->riwayat_alergi; ?>" disabled required="">
                </div>
                 <div class="form-group">
                  <label for="jml_persalinan">Jumlah Persalinan</label>
                  <input type="text" class="form-control" name="jml_persalinan" id="jml_persalinan" value="<?php echo $b->jml_persalinan; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                </div>
                 <div class="form-group">
                  <label for="jml_abortus">Jumlah Abortus</label>
                  <input type="text" class="form-control" name="jml_abortus" id="jml_abortus" value="<?php echo $b->jml_abortus; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">
                  <label for="jml_anak_hidup">Jumlah Anak Hidup</label>
                  <input type="text" class="form-control" name="jml_anak_hidup" id="jml_anak_hidup" value="<?php echo $b->jml_anak_hidup; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                </div>
                 <div class="form-group">
                  <label for="jml_premature">Jumlah Anak Lahir Premature</label>
                  <input type="text" class="form-control" name="jml_premature" id="jml_premature" value="<?php echo $b->jml_premature; ?>" disabled required="" onkeypress="return Angkasaja(event)">
                </div>
                 <div class="form-group">
                  <label for="jarak_hamil_persalinan_terakhir">Jarak Hamil Persalinan Terakhir</label>
                  <input type="date" class="form-control" name="jarak_hamil_persalinan_terakhir" id="jarak_hamil_persalinan_terakhir" value="<?php echo $b->jarak_hamil_persalinan_terakhir; ?>" disabled required="">
                </div>
                 <div class="form-group">
                  <label for="status_imun_akhir">Status Imunisasi TT Terakhir</label>
                  <input type="text" class="form-control" name="status_imun_akhir" id="status_imun_akhir" value="<?php echo $b->status_imun_akhir; ?>" disabled required="">
                </div>
                 <div class="form-group">
                  <label for="penolong_persalinan">Penolong Persalinan Terakhir</label>
                  <input type="text" class="form-control" name="penolong_persalinan" id="penolong_persalinan" value="<?php echo $b->penolong_persalinan; ?>" disabled required="">
                </div>
                 <div class="form-group">
                  <label for="cara_persalinan_akhir">Cara Persalinan Terakhir</label>
                  <input type="text" class="form-control" name="cara_persalinan_akhir" id="cara_persalinan_akhir" value="<?php echo $b->cara_persalinan_akhir; ?>" disabled required="">
                </div>
                 <div class="box-footer">
              </div>
              <!-- /.box-body --> 
            </div>
          </div>
          <?php } ?>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>

  </section>
</form>
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
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

function Angkasaja(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</script>