<section class="content">
      <div class="row">
        <div class="col-xs-12">          
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data LAPORAN KP</h3>
            </div>           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Laporan</th>                  
                </tr>
                </thead>

                <tbody>
                <tr>
                  <?php
                  foreach ($data->result() as $row) {
                  
                  ?>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->id; ?></td>
                  <td><?php echo $row->laporan; ?></td>
                  
                  <td>
                  
                  	<a href="<?php echo base_url().'assets/fileupload/'.$row->laporan  ?>" class="icon">
                      <i class="ion ion-search" ></i>
                    </a>
                      

                    
                  </td>                 
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
