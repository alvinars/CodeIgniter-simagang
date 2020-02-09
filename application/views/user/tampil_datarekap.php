<section class="content">
      <div class="row">
        <div class="col-xs-12">          
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Tabel Rekap</h3>
            </div>

            

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>                  
                  <th>Judul KP</th>
                  <th>Lokasi Kerja Praktek</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Dosen Pembimbing</th>
                  
                </tr>
                </thead>

                <tbody>
                <tr>
                  <?php
                  foreach ($data->result() as $row) {
                  
                  ?>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->nim; ?></td>                  
                  <td><?php echo $row->judul; ?></td>
                  <td><?php echo $row->nama_perusahaan; ?></td>
                  <td><?php echo $row->tgl_mulai;?></td>
                  <td><?php echo $row->tgl_selesai;?></td>
                  <td><?php echo $row->nama_dosen; ?></td> 
                                 
                </tr>
                <?php } ?>               
                </tfoot>                
              </table>
              <a class="btn btn-app" href="<?php echo base_url().'index.php/laporanpdf'?>">            
                <i class="fa fa-save"></i> Download
            </a>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
