<section class="content">
      <!-- Small boxes (Stat box) -->

      <div class="alert alert-block alert-success">             
        <h4>SELAMAT DATANG USER !</h4>
        <p><?php echo $this->session->userdata['nama']; ?> </p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php $query = $this->db->query('SELECT * FROM mahasiswa'); echo $query->num_rows()?></h3>

              <p>Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="ion-android-contacts"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/user/mahasiswa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php $query = $this->db->query('SELECT * FROM dosen'); echo $query->num_rows()?></h3>

              <p>Dosen Pembimbing</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/user/dosen" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php $query = $this->db->query('SELECT * FROM perusahaan'); echo $query->num_rows()?></h3>

              <p>Perusahaan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/user/perusahaan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->        
      </div>
      <!-- /.row -->
      <!-- Main row -->
       


      <div class="row">

        <div class="col-md-4" >
        </div>

        <div class="col-md-4" >
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>INPUT</h3>

              <p>PENGAJUAN KP</p>
            </div>
            <div class="icon">
              <i class="ion-edit"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/ajuan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-md-4" >
        </div>
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          
          <!-- /.box -->

          <!-- quick email widget -->          
        
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          
          <!-- /.box -->

          <!-- solid sales graph -->
          
          <!-- /.box -->

          <!-- Calendar -->
          
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>