<section class="content">
      <div class="row">
        <div class="col-xs-12">          
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Tabel Mahasiswa</h3>
            </div>           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Judul</th>
                  <th>Kode Perusahaan</th>                  
                  <th>Kode Dosen Pembimbing</th>
                  <th>Kode Magang</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                  <?php
                  foreach ($data->result() as $row) {
                  
                  ?>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->nim; ?></td>
                  <td><?php echo $row->alamat; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td><?php echo $row->judul; ?></td>
                  <td><?php echo $row->id_perusahaan;?></td>
                  <td><?php echo $row->nip;?></td>
                  <td><?php echo $row->id_magang; ?></td>                                 
                </tr>
                <?php } ?>               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
