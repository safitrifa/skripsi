<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo URL; ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo URL; ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?php echo URL; ?>assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>

<body>

<!--=================================================================MODAL=================================================-->
<!--=====INPUT====-->
<!-- Modal input ormawa -->
<div class="modal fade" id="inputormawa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Data Baru Ormawa</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>admin/createormawa" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama Ormawa</label>
                             <input type="text" class="form-control" placeholder="Nama Ormawa" name="namaOrmawa" required>
                        </div>
                    </div>
                       
                    <!--
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Utility</label>
                             <input type="file" name="logo">
                        </div>
                    </div> -->
                </div>
                <div class="clearfix"></div>
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Ormawa</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--input ketua-->
<div class="modal fade" id="inputketua" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Data Baru User Ketua</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>admin/createketua" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Username</label>
                             <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                    </div>
                       
                    
                    <!--<div class="col-md-4">
                        <div class="form-group">
                            <label>Password</label>
                             <input type="text" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>-->
                    </div>

                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Periode Menjabat</label>
                            <div class="dropdown">
                                  <select class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" padding-left="10px" name="periode">
                                    <span class="caret"></span>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <?php 
                                        foreach ($this->listperiode as $key => $value) {
                                            echo "<li><option value=\"".$value['periodeid']."\">".$value['periode'].'</option></li>';
                                        }
                                     ?>
                                  </ul>

                                  </select>     
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ketua Ormawa</label>
                            <div class="dropdown">
                                  <select class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" padding-left="10px" name="ormawa">
                                    Jenis Kegiatan
                                    <span class="caret"></span>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <?php 
                                        foreach ($this->listormawa as $key => $value) {
                                            echo "<li><option value=\"".$value['ormawaid']."\">".$value['namaOrmawa'].'</option></li>';
                                        }
                                     ?>
                                  </ul>

                                  </select>     
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Ketua</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--input periode-->
<div class="modal fade" id="inputperiode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Data Baru Ormawa</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>admin/createperiode" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Periode</label>
                             <input type="text" class="form-control" placeholder="periode" name="periode" required>
                             <label>ex: 2015/2016</label>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Periode</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--====EDIT====-->
<!--ormawa-->
<div class="modal fade" id="editormawa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data Ormawa</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>admin/editormawa" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama Ormawa</label>
                             <input type="text" class="form-control" name="namaOrmawa1" id="namaOrmawa1" required>
                        </div>
                    </div>
                       
                    <!--
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Logo</label>
                             <input type="file" name="logo1">
                        </div>
                    </div>-->

                    <div class="col-md-2">
                        <div class="form-group">
                             <input type="hidden" class="form-control" data-toggle="tooltip" data-placement="left" name="ormawaid1" id="ormawaid1" required>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Ormawa</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--periode-->
<div class="modal fade" id="editperiode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data Periode</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>admin/editperiode" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Periode</label>
                             <input type="text" class="form-control" placeholder="periode" name="periode2" id="periode2" required>
                             <label>ex: 2015/2016</label>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                             <input type="hidden" class="form-control" data-toggle="tooltip" data-placement="left" name="periodeid1" id="periodeid1" required>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Periode</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--ketua-->
<!--<div class="modal fade" id="editketua" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data User Ketua</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>admin/editketua" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Username</label>
                             <input type="text" class="form-control" placeholder="Username" name="username1" id="username1" required>
                        </div>
                    </div>
                       
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Password</label>
                             <input type="text" class="form-control" name="password1" id="password1" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Periode Menjabat</label>
                            <div class="dropdown">
                                  <select class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" padding-left="10px" name="periode1">
                                    Jenis Kegiatan
                                    <span class="caret"></span>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <?php 
                                        foreach ($this->listperiode as $key => $value) {
                                            echo "<li><option value=\"".$value['periodeid']."\">".$value['periode'].'</option></li>';
                                        }
                                     ?>
                                  </ul>

                                  </select>     
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ketua Ormawa</label>
                            <div class="dropdown">
                                  <select class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" padding-left="10px" name="ormawa1">
                                    Jenis Kegiatan
                                    <span class="caret"></span>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <?php 
                                        foreach ($this->listormawa as $key => $value) {
                                            echo "<li><option value=\"".$value['ormawaid']."\">".$value['namaOrmawa'].'</option></li>';
                                        }
                                     ?>
                                  </ul>

                                  </select>     
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                             <input type="hidden" class="form-control" data-toggle="tooltip" data-placement="left" name="userid1" id="userid1">
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
        </div>

      </div> <!-- modal body
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Ketua</button>
      </div>
      </form>
    </div>
  </div>
</div>-->



<!--==============================================================BATAS MODAL==============================================-->


    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>SI ORMAWA</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                        
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <?php echo session::get('ormawa') ?> <i class="fa fa-caret-down"></i>
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
                        <a class="active-menu" href="<?php echo URL; ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>admin/evaluasiproker"><i class="fa fa-check-square"></i> Evaluasi</a>
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
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                    </div>
                </div>
				
                <!--ISI KONTEN-->
                 <div class="row">
                    <div class="col-md-5">

                        <div class="panel panel-default">
                    
                        <!--Ormawa-->
                            <div class="panel-body">
                       
                            
                                <div class="panel-heading">
                                 DAFTAR ORMAWA                          
                                </div>

                                <button style="margin: 10px;" class="btn btn-danger" type="button" data-toggle="modal" data-target="#inputormawa"> Tambah Ormawa </button>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <th>No.</th>
                                            <th>Nama Ormawa</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>

                                            <?php
                                                $no=1;
                                                foreach ($this->listormawa as $key => $value) {
                                                    echo "<tr>";
                                                    echo "<td style=\"font-size:10\">".$no.'</td>';
                                                    echo "<td style=\"font-size:10\">".$value['namaOrmawa'].'</td>';
                                                    echo "<td>";                                       
                                                    echo "<div class=\"btn-group\">";
                                                    echo "<a class=\"btn btn-success btn-sm\" type=\"button\" data-toggle=\"modal\" href=\"#editormawa\" onclick=\"editormawa(".$value['ormawaid'].")\">";
                                                    echo "<i class=\"fa fa-pencil\"></i>";
                                                    echo "</a>";

                                                    echo "<a class=\"btn btn-danger btn-sm\" type=\"button\" onclick='javascript:confirmationDeleteOrmawa($(this));return false;' href=\"".URL."admin/deleteormawa/".$value['ormawaid']."\" style=\"margin-left: 10px\">";
                                                    echo "<i class=\"fa fa-times-circle\"></i>";
                                                    echo "</a>";
                                                    echo "</div>";
                                                    echo "</td>";                               
                                                    echo "</tr>";
                                                    $no++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div><!--tb responseive-->
                            </div><!--panel body-->
                        </div> <!--panel default-->
                    </div><!--md5-->


                        <!--ketua Ormawa-->
                    <div class="col-md-7" style="margin-top:20px;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel-heading">
                                     DAFTAR USER KETUA ORMAWA                          
                                </div>

                                <button style="margin: 10px;" class="btn btn-danger" type="button" data-toggle="modal" data-target="#inputketua"> Tambah User </button>

                                <div class="panel-body">
                                  <div class="panel-group" id="accordion">
                                       <div class="panel panel-default">
                                          <div class="panel-heading">
                                              <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#Informasi" class="collapsed">Harap Dibaca Dulu</a>
                                               </h4>
                                          </div>
                                          <div id="Informasi" class="panel-collapse collapse" style="height: 0px;">
                                              <div class="panel-body">
                                                 Password Default adalah 12345
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                               </div>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Ormawa</th>
                                            <th>Periode</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>

                                            <?php
                                                $no=1;
                                                foreach ($this->listketua as $key => $value) {
                                                    echo "<tr>";
                                                    echo "<td style=\"font-size:10\">".$no.'</td>';
                                                    echo "<td style=\"font-size:10\">".$value['username'].'</td>';
                                                    echo "<td style=\"font-size:10\">".$value['namaOrmawa'].'</td>';
                                                    echo "<td style=\"font-size:10\">".$value['periode'].'</td>';
                                                    echo "<td>";                                       
                                                    echo "<div class=\"btn-group\">";

                                                    if ($value['idstatus'] == 2) {
                                                      echo "<a class=\"btn btn-success btn-sm\" type=\"button\" data-toggle=\"modal\" href=\"".URL."admin/aktifkanketua/".$value['userid']."\">";
                                                      echo "<i class=\"fa fa-check-square\"></i>";
                                                      echo "</a>";
                                                      echo "</div>";
                                                      echo "</td>";    
                                                    } else {
                                                                                
                                                      echo "<a class=\"btn btn-danger btn-sm\" type=\"button\" data-toggle=\"modal\" href=\"".URL."admin/nonaktifkanketua/".$value['userid']."\">";
                                                      echo "<i class=\"fa fa-eye-slash\"></i>";
                                                      echo "</a>";
                                                      echo "</div>";
                                                      echo "</td>";

                                                    }
                                                    echo "</tr>";

                                                    $no++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div><!--tb responseive-->
                            </div><!--panel body-->
                        </div><!--panel dflt-->
                    </div><!--col md 7-->
                </div><!--row-->

                   

                <div class="row">
                            <!--periode-->
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel-heading">
                                 DAFTAR PERIODE                          
                                </div>
                                <button style="margin: 10px;" class="btn btn-danger" type="button" data-toggle="modal" data-target="#inputperiode"> Tambah Periode </button>

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <th>No.</th>
                                            <th>Periode</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>

                                            <?php
                                                $no=1;
                                                foreach ($this->listperiode as $key => $value) {
                                                    echo "<tr>";
                                                    echo "<td style=\"font-size:10\">".$no.'</td>';
                                                    echo "<td style=\"font-size:10\">".$value['periode'].'</td>';
                                                    echo "<td>";                                       
                                                    echo "<div class=\"btn-group\">";
                                                    echo "<a class=\"btn btn-success btn-sm\" type=\"button\" data-toggle=\"modal\" href=\"#editperiode\" onclick=\"editperiode(".$value['periodeid'].")\">";
                                                    echo "<i class=\"fa fa-pencil\"></i>";
                                                    echo "</a>";

                                                    echo "<a class=\"btn btn-danger btn-sm\" type=\"button\" onclick='javascript:confirmationDeletePeriode($(this));return false;' href=\"".URL."admin/deleteperiode/".$value['periodeid']."\" style=\"margin-left: 10px\">";
                                                    echo "<i class=\"fa fa-times-circle\"></i>";
                                                    echo "</a>";
                                                    echo "</div>";
                                                    echo "</td>";                               
                                                    echo "</tr>";
                                                    $no++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div><!--tb rspnsf-->
                            </div><!--pnl body-->
                        </div><!--pnl dlt-->
                    </div><!--col-->
                </div><!--row periode-->

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
    <!-- Morris Chart Js -->
    <script src="<?php echo URL; ?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="<?php echo URL; ?>assets/js/custom-scripts.js"></script>

    <!--edit ormawa-->
    <script>
        var editormawa = function(id){
            $.get( "/skripsi/admin/getsatuormawa/"+id, function( data ) {
              var obj = jQuery.parseJSON( data);
              $( "#ormawaid1" ).val( obj.ormawaid );
              $( "#namaOrmawa1" ).val( obj.namaOrmawa );
            });
        }
    </script>

    <!--edit periode-->
    <script>
        var editperiode = function(id){
            $.get( "/skripsi/admin/getsatuperiode/"+id, function( data ) {
              var obj = jQuery.parseJSON( data);
              $( "#periodeid1" ).val( obj.periodeid );
              $( "#periode2" ).val( obj.periode );
            });
        }
    </script>

    <!--edit ketua-->
    <script>
        var editketua = function(id){
            $.get( "/skripsi/admin/getsatuketua/"+id, function( data ) {
              var obj = jQuery.parseJSON( data);
              $( "#userid1" ).val( obj.userid );
              $( "#username1" ).val( obj.username );
              $( "#password1" ).val( obj.password );
            });
        }
    </script>

    <!--untuk confrim hapus ormawa-->
    <script>
       function confirmationDeleteOrmawa(anchor){
            var conf = confirm('Apakah Anda Yakin Ingin Menghapus Ormawa Ini?');
            if(conf)
                window.location=anchor.attr("href");
        }
    </script>

    <!--untuk confrim hapus Ketua-->
    <script>
       function confirmationDeleteKetua(anchor){
            var conf = confirm('Apakah Anda Yakin Ingin Menghapus Akun Ketua Ini?');
            if(conf)
                window.location=anchor.attr("href");
        }
    </script>

    <!--untuk confrim hapus ormawa-->
    <script>
       function confirmationDeletePeriode(anchor){
            var conf = confirm('Apakah Anda Yakin Ingin Menghapus Periode Ini?');
            if(conf)
                window.location=anchor.attr("href");
        }
    </script>
 

</body>

</html>