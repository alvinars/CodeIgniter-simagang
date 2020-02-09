<section class="content">
      <!-- Small boxes (Stat box) -->

      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>     	      
      	<h4><i class="icon fa fa-check"></i>Login SUCCESS</h4>
        <h5>Hello <?php echo $this->session->userdata['nama']; ?> !</h5>        
      </div>

      <!--widget tampil-->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php $query = $this->db->query('SELECT * FROM mahasiswa'); echo $query->num_rows()?></h3>

              <p>Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="ion-android-contacts"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/mahasiswa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php $query = $this->db->query('SELECT * FROM dosen'); echo $query->num_rows()?></h3>

              <p>Dosen Pembimbing</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/dosen" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php $query = $this->db->query('SELECT * FROM perusahaan'); echo $query->num_rows()?></h3>

              <p>Perusahaan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/perusahaan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php $query = $this->db->query('SELECT * FROM view_magang'); echo $query->num_rows()?></h3>

              <p>Rekap</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/rekap" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->        
      </div>      
      <!-- /.row -->

      <!--widget input-->
      <div class="row">
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>INPUT</h3>

              <p>Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="ion-android-contacts"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/mahasiswa/input" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>INPUT</h3>

              <p>Dosen Pembimbing</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/dosen/input" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>INPUT</h3>

              <p>Perusahaan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/perusahaan/input" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->        
      </div>      
      <!-- /.row -->



      <!-- widget tampil ajuan -->
      <div class="row">
        <!-- Left col -->

        <div class="col-lg-3 col-xs-6">
        </div>
        
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <p><?php $query = $this->db->query('SELECT * FROM upload'); echo $query->num_rows()?></p>

              <h2>Data Laporan</h2>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/laporan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>


          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <p><?php $query = $this->db->query('SELECT * FROM ajuan'); echo $query->num_rows()?></p>

              <h2>Ajuan</h2>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/ajuan/data" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>

          <div class="col-lg-3 col-xs-6">
          </div>
          
          


        </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          
          <!-- /.box -->
      </div>
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