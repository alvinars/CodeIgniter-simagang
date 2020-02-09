<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Perusahaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/perusahaan/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Perusahaan </label>
                  <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Perusahaan" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Perusahaan </label>
                  <input type="text" name="kode" value="<?php echo $kode; ?>" class="form-control" id="exampleInputEmail1" placeholder="Kode Perusahaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $alamat; ?>" class="form-control" id="exampleInputPassword1" placeholder="Alamat Perusahaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputPassword1" placeholder="E-mail Perusahaan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Telepon</label>
                  <input type="number" name="telp" value="<?php echo $telp; ?>" class="form-control" id="exampleInputPassword1" placeholder="No Telepon">
                </div>                
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Magang</label>
                  <input type="number" name="magang" value="<?php echo $magang; ?>" class="form-control" id="exampleInputPassword1" placeholder="Kode Magang">
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