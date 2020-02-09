<!--<section class="content">

<div class="row">
        
        <div class="col-md-6">

  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">UPLOAD LAPORAN KP</h3>
            </div>
            
            <form role="form">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <?php echo form_open_multipart('upload/aksi_upload');?>
                  <input type="file" name="berkas" id="exampleInputFile">

                  <p class="help-block">Format file harus PDF(.pdf) atau DOC(.doc)</p>
                </div>
                
              </div>
             
              <div class="box-footer">
                <button type="submit" value="upload" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          </div>
          </div>

          </section>-->




<h3 align="center"><b>Masukkan Laporan</b></h3>
 <div class="col-md-3">
 </div>
 <div class="jumbotron col-md-6">
   <?=form_open_multipart('datalaporan/proses_input')?>
    <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Mahasiswa" id="nama" required>
    </div>
    <div class="form-group">
      <label for="harga">NIM :</label>
      <input type="number" name="nim" class="form-control" placeholder="Masukan NIM Mahasiswa" id="harga" required>
    </div>   
    <div class="form-group">
      <label for="userfile">Laporan :</label>
      <input type="file" name="userfile" class="file">
      <div class="input-group col-xs-12">
        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
        <input type="text" class="form-control input-lg" disabled placeholder="Upload Laporan">
        <span class="input-group-btn">
          <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i></button>
        </span>
      </div><br>
    </div>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
 </div>

</div> <!-- /container -->
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
  <script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\fakepath\/i, ''));
  });
  </script>