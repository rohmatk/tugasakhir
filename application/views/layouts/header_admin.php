<?php
if($this->session->status !== ('Logged'))
   {
     redirect('login');
    }
?>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Pendukung Keputusan</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/morris.js/morris.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
    
    <!--  -->

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><span><center><b>WASPAS DRONE</b></center></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <center><img src="<?php echo base_url('assets/img/ava2.png')?>"  class="img-circle"></center>
            <div class="profile clearfix">
              <!-- <div class="profile_pic">
                <img src="<?php echo base_url('assets/img/logos2.png')?>" alt="." class="img-circle profile_img">
              </div> -->
              <center>
              <div class="profile_info">
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span><b><?php echo $this->session->username ?><b></span>
              </div>
              </center>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu" >
                  <li><a href="<?php echo base_url() ?>Login/home"><i class="fa fa-home"></i> Home </a></li>
                  <?php if($this->session->userdata('id_user_level') == '1'): ?>
                  <li><a><i class="fa fa-edit"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   
                      <li><a href="<?php echo base_url('User/create')?>">Tambah User</a></li>
                      <li><a href="<?php echo base_url('User/')?>">List User</a></li>
                    </ul>
                  </li>
                  <?php endif; ?>
                  <?php if($this->session->userdata('id_user_level') == '1'): ?>
                  <li><a><i class="fa fa-edit"></i> Kriteria <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Kriteria/create')?>">Tambah Kriteria</a></li>
                      <li><a href="<?php echo base_url('Kriteria/')?>">List Kriteria</a></li>
                      <li><a href="<?php echo base_url('Sub_kriteria/')?>">List Sub Kriteria</a></li>
                     
                    </ul>
                  </li>
                  <?php endif; ?>
                  
                  <?php if($this->session->userdata('id_user_level') == '1'): ?>
                  <li><a><i class="fa fa-edit"></i> Alternatif <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Alternatif/create')?>">Tambah Alternatif</a></li>
                      <li><a href="<?php echo base_url('Alternatif/')?>">List Alternatif</a></li>
                     
                    </ul>
                  </li>
                  <?php endif; ?>
                  <?php if($this->session->userdata('id_user_level') == '2'): ?>
                  <li>
                  
                  <a href="<?php echo base_url('alternatif/')?>">
                  <i class="fa fa-search"></i>List Alternatif</a>
                </li>
                  <?php endif; ?>
                
                  <li>
                  
                    <a href="<?php echo base_url('perhitungan/')?>">
                    <i class="fa fa-search"></i>Perhitungan WASPAS</a>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php base_url('Login/logout')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav" style="background-color: #73879C">
          <div class="nav_menu" style="background-color: #73879C">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/ava3.png')?>" class="img-circle user_img" alt="User Image" >
              <span class="hidden-xs">
                <?php 
                  echo $this->session->username;            
                ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <?php if($this->session->userdata('id_user_level') == '1'): ?>
                <li><a href="<?php echo base_url('history/')?>"><i class="fa fa-history">&nbsp History</i></a></li>
                <?php endif; ?>
                <li><a href="<?php echo base_url('Login/Logout')?>"><i class="fa fa-sign-out">&nbsp Sign Out</i></a></li>
              </li>
            </ul>
          </li>
        </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->