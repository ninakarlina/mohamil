<!-- Default box -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Monitoring Kehamilan PUSKESMAS Lohbener
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i></i> Edit Data Ibu</a></li>
      </ol>

 <section class="content">
      <div class="row">
      <div class="col-md-6">     
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Data Ibu</h3>

    </div>
    <div class="box-body">
	<?php foreach($ibu_hamil as $bu){ ?>
    <form action="<?php echo base_url()."C_detil_ibu/update_ibu"; ?>" method="POST">		 
        <div class="box-body">
             <!--  <label for="id_artikel">Id Artikel</label> -->
              <input type="hidden" class="form-control" name="id_ibu"  value="<?php echo $bu->id_ibu; ?>" id="id_ibu" placeholder="" >
            <div class="form-group">
              <label for="nama_ibu">Nama</label>
              <input type="text" class="form-control" name="nama_ibu"  value="<?php echo $bu->nama_ibu; ?>" id="nama_ibu" placeholder="Masukkan Nama Ibu Hamil">
            </div>
            <div class="form-group">
              <label for="tempat_lahir_ibu">Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir_ibu"  value="<?php echo $bu->tempat_lahir_ibu; ?>" id="tempat_lahir_ibu" placeholder="Tempat Lahir">
            </div>
            <div class="form-group">
              <label for="tgl_lahir_ibu">Tanggal Lahir Ibu</label>
              <input type="date" class="form-control" name="tgl_lahir_ibu"  value="<?php echo $bu->tgl_lahir_ibu; ?>" id="tgl_lahir_ibu" placeholder="">
            </div>
            <div class="form-group">
              <label for="kehamilan_ke">Kehamilan Ke</label>
              <input type="text" class="form-control" name="kehamilan_ke"  value="<?php echo $bu->kehamilan_ke; ?>" id="kehamilan_ke" placeholder="Masukkan Angka" onkeypress="return Angkasaja(event)">
            </div>
            <div class="form-group">        
                  <label>Agama</label>
                  <select class="form-control" name="agama_ibu" value="<?php echo $bu->agama_ibu; ?>">
                            <option disabled diselected>-- Pilih Agama  --</option>
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                  </select>
            </div>
            <div class="form-group">
              <label for="tempat_lahir_ibu">Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir_ibu"  value="<?php echo $bu->tempat_lahir_ibu; ?>" id="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="form-group">
              <label for="tgl_lahir_ibu">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir_ibu"  value="<?php echo $bu->tgl_lahir_ibu; ?>" id="tgl_lahir_ibu" placeholder="">
            </div>
          </div>
          </div>
      </div>
    </div>
    <div class="col-md-6">

      <!-- Default box -->
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Suami</h3>

          </div> 
        <div class="box-body">
         
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_suami">Nama Suami</label>
                  <input type="text" class="form-control" name="nama_suami" id="nama_suami" placeholder="Masukkan Nama" required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir_suami">Tempat Lahir Ibu</label>
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
      </div>

      
      <!-- Default box -->
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Alamat Rumah</h3>
          </div> 
        <div class="box-body">
        
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

        <!-- /.box-body -->

            <div class="box-footer">
             <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
    </form>
	<?php
	  }
	?>
	</div>
    <!-- /.box-body -->
    
    <!-- /.box-footer-->
</div>
</div>

<script type="text/javascript">
function Angkasaja(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</script>

<!-- /.box -->