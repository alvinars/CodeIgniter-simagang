<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/mahasiswa/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap (maks 20 char)" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIM</label>
                  <input type="text" name="nim" class="form-control" id="exampleInputPassword1" placeholder="NIM" value="<?php echo $nim; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="<?php echo $alamat; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="E-mail Aktif" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Judul</label>
                  <input type="text" name="judul" class="form-control" id="exampleInputPassword1" placeholder="Judul Kerja Praktek" value="<?php echo $judul; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Perusahaan</label>
                  <input type="text" name="perusahaan" class="form-control" id="exampleInputPassword1" placeholder="Kode Perusahaan" value="<?php echo $perusahaan; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Dosen Pembimbing</label>
                  <input type="text" name="kode_dosen" class="form-control" id="exampleInputPassword1" placeholder="Kode Dosen Pembimbing" value="<?php echo $kode_dosen; ?>" >
                </div><div class="form-group">
                  <label for="exampleInputPassword1">Kode Magang</label>
                  <input type="text" name="kode_magang" class="form-control" id="exampleInputPassword1" placeholder="Kode Magang" value="<?php echo $kode_magang; ?>">
                </div>
                
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="checkbox"> Semua data benar
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          

        </div>
        <!--/.col (left) -->
       
      </div>
      <!-- /.row -->
</section>