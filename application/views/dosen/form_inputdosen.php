<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Dosen</h3>
            </div>
            <!-- /.box-header -->                

            <!-- form start -->
            <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/dosen/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap (maks 20 char)" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIP</label>
                  <input type="number" name="nip" class="form-control" id="exampleInputPassword1" placeholder="NIP" value="<?php echo $nip; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="<?php echo $alamat; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Telepon</label>
                  <input type="number" name="telp" class="form-control" id="exampleInputPassword1" placeholder="No Telepon" value="<?php echo $telp; ?>">
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