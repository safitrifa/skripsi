<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap HTML5 Admin Template : Master</title>
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
                        <a class="active-menu" href="<?php echo URL; ?>evaluasi"><i class="fa fa-check-square"></i> Evaluasi</a>
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
                        <a  href="<?php echo URL; ?>addkadiv"><i class="fa fa-users"></i> Kepala Divisi</a>
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
                            FORM EVALUASI PROGRAM KERJA
                        </h1>
                    </div>
                </div> 

                <!--ISI KONTEN-->
                <div class="row">
                    <div class="col-md-12">

                        <div class="container-fluid" style="margin-top:20px;">
                            <form class="form-horizontal" role="form" method="post" action="<?php echo URL; ?>evaluasi/hitung">
                                
                                <!--ID proker-->
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >ID Proker:</label>
                                    <div class="col-sm-7">
                                        <div class="inner-addon left-addon"> 
                                            <input type="text" class="form-control" name="prokerid" placeholder="Enter id" value="<?php echo $this->idnyaproker; ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <!--Nama proker-->
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Nama Proker:</label>
                                    <div class="col-sm-7">
                                        <div class="inner-addon left-addon"> 
                                            <input type="text" class="form-control" name="" placeholder="Enter id" value="<?php echo $this->namaproker; ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <!--combo box dropdown kriteria dan sub-->
                                <?php

                                    foreach ($this->datakriteria as $key => $value) {
                                        echo "<div class=\"form-group\">";
                                        echo "<label class=\"control-label col-sm-2\">".$value['namakriteria'];
                                        echo "</label>";
                                        echo "<div class=\"col-md-7 col-sm-6 col-xs-12 spas\">";
                                        echo "<select class=\"form-control col-md-6 col-sm-6 col-xs-12\" name=\"".$value['kriteriaid']."\">";
                                        echo "<option value=\"0\">Pilih sub kriteria</option>";                                  
                                        foreach ($this->subkrit as $key => $sub) {
                                            if ($sub['kriteriaid'] == $value['kriteriaid']) {   
                                               echo "<option value=\"".$sub['utility']."\">".$sub['namasub']."</option>";
                                            }
                                        }
                                        echo "</select>";

                                        echo "</div>";
                                        echo "</div>";
                                        
                                    }
                                ?>

                                <button class="btn btn-primary col-md-4" type="submit" name="hitung" style="margin-left: 25%">Submit</button>


                            </form>
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
