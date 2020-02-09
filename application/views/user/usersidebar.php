<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">            
            <li><a href="<?php echo base_url(); ?>index.php/user"><i class="fa fa-circle-o"></i> Home</a></li>
          </ul>
        </li>

        <li class="header">DATA KERJA PRAKTEK</li> 
        <!--REKAP-->       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>REKAP KERJA PRAKTEK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>index.php/user/rekap"><i class="fa fa-circle-o"></i>Data Rekap</a></li>            
          </ul>
        </li>
        <!--REKAP-->

        <!--MAHASISWA-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>MAHASISWA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>index.php/user/mahasiswa"><i class="fa fa-circle-o"></i>Lihat Data</a></li>            
          </ul>
        </li>
        <!--MAHASISWA-->
        <!--DOSEN-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>DOSEN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>index.php/user/dosen"><i class="fa fa-circle-o"></i>Lihat Data</a></li>
          </ul>
        </li>
        <!--DOSEN-->

        <!--PERUSAHAAN-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>PERUSAHAAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/user/perusahaan"><i class="fa fa-circle-o"></i> Lihat Perusahaan</a></li>           
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>DATA PENDUKUNG</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">          
            <li><a href="<?php echo base_url();?>index.php/data_pendukung/user"><i class="fa fa-circle-o"></i>Unduh Data</a></li>
          </ul> 
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>UPLOAD LAPORAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          
            <li><a href="<?php echo base_url();?>index.php/upload"><i class="fa fa-circle-o"></i>Upload</a></li>
          </ul>          
        </li>

</ul>