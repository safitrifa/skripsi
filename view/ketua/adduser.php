<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola Kepala Divisi</title>
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
                        <a href="<?php echo URL; ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="<?php echo URL; ?>proker"><i class="fa fa-file-text"></i> Program Kerja</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>evaluasi"><i class="fa fa-check-square"></i> Evaluasi</a>
                    </li>
                    <?php  
                        if (session::get('ormawalevel') == 2) {
                            echo "<li>";
                            echo "<a href=\"".URL."evaluasiormawa\"><i class=\"fa fa-check-square\"></i> Evaluasi Ormawa</a>";
                            echo "</li>";
                        }
                    ?>
                    <li>
                        <a href="<?php echo URL; ?>rekomendasi"><i class="fa fa-check-square"></i> Rekomendasi</a>
                    </li>
                    <!--<li>
                        <a href="<?php echo URL; ?>kriteria"><i class="fa fa-th-list"></i> Kriteria & Sub Kriteria</a>
                    </li>-->
                    <li>
                        <a class="active-menu" href="<?php echo URL; ?>addkadiv"><i class="fa fa-users"></i> Kepala Divisi</a>
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
                            KELOLA KEPALA DIVISI
                        </h1>
                    </div>
                </div> 

                <!--ISI KONTEN-->
                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 DAFTAR KEPALA DIVISI                            
                            </div>



                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Username</th>
                                                <!---<th>Password</th>-->
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no=1;
                                            foreach ($this->datakadiv as $key => $value) {
                                                echo "<tr>";
                                                echo "<td style=\"font-size:10\">".$no.'</td>';
                                                echo "<td style=\"font-size:10\">".$value['username'].'</td>';
                                                // echo "<td style=\"font-size:10\">".$value['password'].'</td>';
                                                echo "<td>";                                       
                                                // echo "<div class=\"btn-group\">";
                                                // echo "<a class=\"btn btn-info btn-sm\" type=\"button\" onclick=\"edituser(".$value['userid'].")\">";
                                                // echo "<i class=\"fa fa-pencil\"></i>";
                                                // echo "</a>";

                                                echo "<a class=\"btn btn-danger btn-sm\" type=\"button\"onclick='javascript:confirmationDeleteUser($(this));return false;' href=\"".URL."addkadiv/deleteuser/".$value['userid']."\" style=\"margin-left: 10px\">";
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
                            </div><!--pnl bd-->
                        </div><!--pnl dflt-->
                    </div><!--col md 5-->


                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 TAMBAH KEPALA DIVISI                            
                            </div>

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

                            <div class="panel-body">
                                <div class="modal-body">
                                    <div class="content">
                                        <form action="<?php echo URL; ?>addkadiv/createuser" method="POST">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                         <input type="text" class="form-control" placeholder="Username" name="username" required>
                                                    </div>
                                                </div>

                                                <!--<div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                         <input type="text" class="form-control" placeholder="periode" name="password" required>
                                                    </div>
                                                </div>-->
                                            </div>
                                            <div class="clearfix"></div>
                                    </div>
                                </div><!--modalbody-->

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Data</button>
                                </div>
                            </form>

                            </div><!--pnl bd-->
                        </div><!--pnl dflt-->
                    </div><!--col md 5-->


                </div><!--row-->


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


    <!--untuk confrim hapus ormawa-->
    <script>
       function confirmationDeleteUser(anchor){
            var conf = confirm('Apakah Anda Yakin Ingin Menghapus User Ini?');
            if(conf)
                window.location=anchor.attr("href");
        }
    </script>
    
   
</body>
</html>
