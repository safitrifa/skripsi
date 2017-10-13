<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lihat LPJ</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo URL; ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="<?php echo URL; ?>assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fa fa-gear"></i> <strong>SI ORMAWA</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
    
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i><?php echo session::get('ormawa') ?> <?php echo session::get('periode') ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo URL; ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                   
                     <li>
                        <a href="<?php echo URL; ?>admin"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo URL; ?>admin/evaluasiproker"><i class="fa fa-check-square"></i> Evaluasi</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>kriteria"><i class="fa fa-th-list"></i> Kriteria & Sub Kriteria</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>pengajuanproker"><i class="fa fa-check-square"></i> Pengajuan Proker</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            LAPORAN PERTANGGUNGJAWABAN<br>
                            <!--<small>Daftar Program kerja extern yang dapat di rekomendasikan</small>-->
                        </h1>
                    </div>
                </div> 

                <!--ISI KONTEN-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="judul" style="margin-left: 20px;">Lihat Laporan Pertanggungjawaban</h3>
                                <div class="container-fluid" style="margin-top:20px;">
                                    <form class="form-horizontal" role="form">
                                        
                                        <!--ID proker-->
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >ID Proker:</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                    <input type="text" class="form-control" name="prokerid" placeholder="Enter id" value="<?php echo $this->detail['prokerid']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Nama proker-->
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >Nama Proker:</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                    <input type="text" class="form-control" value="<?php echo $this->detail['namaproker']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Pendahuluan-->
                                        <!--latar belakang-->
                                        <h5 class="judul" style="margin-left: 20px;">Pendahuluan</h5>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >Latar Belakang :</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                    <textarea type="text" class="form-control" rows="9"><?php echo $this->detail['latarbelakang']; ?> </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!--rasional-->
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >Rasional :</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                    <textarea type="text" class="form-control" rows="9"><?php echo $this->detail['rasional']; ?> </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!--tujuan-->
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >Tujuan :</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                    <textarea type="text" class="form-control" rows="9"><?php echo $this->detail['tujuanlpj']; ?> </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Pelaksanaan Kegiatan-->
                                        <h5 class="judul" style="margin-left: 20px;">Pelaksanaan Kegiatan</h5>
                                       <!--<div class="form-group">
                                            <label class="control-label col-sm-2" >Tanggal Pelaksanaan :</label>
                                            <div class="col-sm-5">
                                                <div> 
                                                    <input type="text" class="form-control" value="<?php echo $this->detail['tglpelaksanaan']; ?>">
                                                </div>
                                            </div>
                                        </div>-->

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >Tempat Kegiatan :</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                    <input type="text" class="form-control" value="<?php echo $this->detail['tempat']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >Peserta :</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                     <textarea type="text" class="form-control"><?php echo $this->detail['peserta']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2">Sesuai Perencanaan :</label>
                                            <div class="col-md-7 col-sm-6 col-xs-12 spas">
                                                <p><?php echo $this->detail['sesuai']; ?></p>
                                            </div>
                                       </div>

                                       <div class="form-group">
                                            <label class="control-label col-sm-2" >Kendala :</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                     <textarea type="text" rows="9" class="form-control"><?php echo $this->detail['kendala'];?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >Solusi :</label>
                                            <div class="col-sm-7">
                                                <div class="inner-addon left-addon"> 
                                                     <textarea type="text" rows="9" class="form-control"><?php echo $this->detail['solusi']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                 <!-- /. ROW  -->
				 <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo URL; ?>assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo URL; ?>assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="<?php echo URL; ?>assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
