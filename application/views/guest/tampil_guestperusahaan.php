<section class="content">
      <div class="row">
        <div class="col-xs-12">          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Perusahaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>                  
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>E-mail</th> 
                  
                  <th> </th>           
                </tr>
                </thead>

                <tbody>
                <tr>
                  <?php
                  foreach ($data->result() as $row) {
                  
                  ?>
                  <td><?php echo $row->nama; ?></td>                  
                  <td><?php echo $row->alamat; ?></td>                  
                  <td><?php echo $row->no_telp; ?></td>                                    
                  <td><?php echo $row->email; ?></td>                   
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
