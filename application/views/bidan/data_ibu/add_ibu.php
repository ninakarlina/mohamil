 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
       <li><a href="#"><i></i> Tambah Data Ibu</a></li>
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
         <form action="<?php echo base_url()."C_detil_ibu/insert"; ?>" method="POST">    
              <div class="box-body">
                <input type="hidden" class="form-control" name="id_ibu" id="id_ibu" placeholder="" >
                <div class="form-group">
                  <label for="kode_ibu">Kode Ibu</label>
                  <input type="text" class="form-control" name="kode_ibu" value="<?php echo $kode; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="nama_ibu">Nama</label>
                  <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Masukkan Nama" required="">
                </div>
                  <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Minimal 8 Karakter" required="">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                </div>
                <div class="form-group">        
                  <input type="text" name="level" required="" value="ibu" hidden="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir_ibu">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir_ibu" id="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir" required="">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir_ibu">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir_ibu" id="tgl_lahir_ibu" placeholder="" required="">
                </div>
                <div class="form-group">
                  <label for="kehamilan_ke">Kehamilan Ke</label>
                  <input type="text" class="form-control" name="kehamilan_ke" id="kehamilan_ke" placeholder="Masukkan Angka" required="" onkeypress="return Angkasaja(event)">
                </div>
                <div class="form-group">        
                  <label>Agama</label>
                  <select class="form-control" name="agama_ibu">
                            <option disabled diselected>-- Pilih Agama  --</option>
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pendidikan_ibu">Pendidikan</label>
                  <input type="text" class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" placeholder="Masukkan Pendidikan Terakhir" required="">
                </div>
                <div class="form-group">
                <label>Golongan Darah</label>
                  <select class="form-control" name="goldar_ibu">
                            <option disabled diselected>-- Pilih Golongan Darah --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pekerjaan_ibu">Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" required="">
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
                  <input type="text" class="form-control" name="nama_suami" id="nama_suami" placeholder="Masukkan Nama" required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir_suami">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir_suami" id="tempat_lahir_suami" placeholder="Masukkan Tempat Lahir" required="">
                </div>
                <div class="form-group">
                 <label>Agama</label>
                  <select class="form-control" name="agama_suami">
                            <option disabled diselected>-- Pilih Agama  --</option>
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                          </select>
                </div>
                <div class="form-group">
                  <label for="pendidikan_suami">Pendidikan</label>
                  <input type="text" class="form-control" name="pendidikan_suami" id="pendidikan_suami" placeholder="Masukkan Pendidikan Terakhir" required="">
                </div>
               <div class="form-group">
                <label>Golongan Darah</label>
                 <select class="form-control" name="goldar_suami" > 
                            <option disabled diselected>-- Pilih Golongan Darah --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pekerjaan_suami">Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan_suami" id="pekerjaan_suami" placeholder="Masukkan Pekerjaan Suami" required="">
                </div>
              </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="alamat">
                <div class="box-body">
                <div class="form-group">
                  <label for="alamat_rumah">Alamat Rumah</label>
                  <input type="text" class="form-control" name="alamat_rumah" id="alamat_rumah" placeholder="Masukkan Alamat Rumah" required="">
                </div>
                <div class="form-group">
                  <label for="kecamatan">Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan" required="">
                </div>
                <div class="form-group">
                  <label for="kabupaten">Kabupaten</label>
                  <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Masukkan Kabupaten" required="">
                </div>
                <div class="form-group">
                  <label for="no_tlp">Nomor HP</label>
                  <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="Masukkan Nomor Handphone / Telepon" required="" onkeypress="return Angkasaja(event)">
                </div>
              <!-- /.box-body -->
            </div>
              </div>
              <div class="tab-pane" id="kes_ibu">
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
                  <label for="lila">Lingkar Lengan Atas</label>
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
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              <!-- /.box-body --> 
            </div>
          </div>
          
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