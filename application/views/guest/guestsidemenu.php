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
            <li><a href="<?php echo base_url(); ?>index.php/guest"><i class="fa fa-circle-o"></i> Home</a></li>
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
            <li><a href="<?php echo base_url(); ?>index.php/guest/rekap"><i class="fa fa-circle-o"></i>Data Rekap</a></li>            
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
            <li><a href="<?php echo base_url(); ?>index.php/guest/mahasiswa"><i class="fa fa-circle-o"></i>Lihat Data</a></li>            
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
            <li><a href="<?php echo base_url(); ?>index.php/guest/dosen"><i class="fa fa-circle-o"></i>Lihat Data</a></li>
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
            <li><a href="<?php echo base_url()?>index.php/guest/perusahaan"><i class="fa fa-circle-o"></i> Lihat Perusahaan</a></li>           
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
            <li><a href="<?php echo base_url();?>index.php/guest_download"><i class="fa fa-circle-o"></i>Unduh Data</a></li>
          </ul> 
        </li>

</ul>