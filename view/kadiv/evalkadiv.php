<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Evaluasi</title>
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
                <a class="navbar-brand" href="index.html"></i> <strong>SI ORMAWA
                </strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
    
                <li class="dropdown">   
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <?php echo session::get('ormawa') ?> <?php echo session::get('periode') ?> <i class="fa fa-caret-down"></i>
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
                    <li>
                        <a href="<?php echo URL; ?>rekomendasi"><i class="fa fa-check-square"></i> Rekomendasi</a>
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
                        Evaluasi Program Kerja
                  </h1>
                </div>
            </div> 
                 <!-- /. ROW  -->

                 <!--ISI KONTEN-->
                <div class="row">

                    <!--PROKER EVALUASI-->
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 DAFTAR PROGRAM KERJA  EXTERN                          
                            </div>


                            <div class="panel-heading">
                                 <a class="btn btn-success btn-fill" type="button" href="<?php echo URL; ?>evaluasi/hasil"><i class="pe-7s-look"></i> Hasil Evaluasi </a>
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
                                                Ketua Ormawa Memiliki Hak untuk membuat kriteria dan sub kriteria penilaian.<br>
                                                Untuk Menambah Data Kriteria KLIK tombol DATA BARU.<br>
                                                Untuk menambah data sub kriteria dari kriteria tertentu, KLIK tombol SUB pada kolom aksi.<br>
                                                Setiap nilai yang diinputkan berdasar pada ketua.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                               
                           

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                               <th>No.</th>
                                                <th>Nama Program Kerja</th>
                                                <th>Status Evaluasi</th>
                                                <th>LPJ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $no=1;
                                              foreach ($this->dataproker as $key => $value) {
                                                  echo "<tr>";
                                                  echo "<td>".$no.'</td>';
                                                  echo "<td>".$value['namaproker'].'</td>';
                                                  echo "<td>";                                       
                                                  echo "<div class=\"btn-group\">";

                                                  if (new DateTime($value['tanggalselesai']) > new DateTime($this->hariini)) {
                                                      echo "<span class=\"label label-danger\" style=\"font-size:12px;\">Belum bisa di evaluasi</span>";
                                                  } else if (new DateTime($value['tanggalselesai']) < new DateTime($this->hariini)){
                                                      if ($value['penilaian'] == 0) {
                                                          echo "<a class=\"btn btn-danger btn-sm\" type=\"button\" href=\"".URL."evaluasi/penilaian/".$value['prokerid']."\">";
                                                          echo "<i class=\"fa fa-check-circle\"></i> Evaluasi";
                                                          echo "</a>";
                                                      } else {
                                                          echo "<span class=\"label label-success\" style=\"font-size:12px;\">Telah Dievaluasi</span>";    
                                                      }
                                                  }
                                                  echo "</div>";
                                                  echo "</td>";  
                                                  echo "<td>";                                       
                                                    echo "<div class=\"btn-group\">";
                                                    
                                                    
                                                     if ($value['latarbelakang'] == NULL) {
                                                          echo "<a class=\"btn btn-warning btn-sm btn-fill\" type=\"button\" href=\"".URL."lpj/formlpj/".$value['prokerid']."\">";
                                                          echo "<i class=\"pe-7s-check\"></i> Buat LPJ";
                                                          echo "</a>";   
                                                    } else {
                                                        echo "<a class=\"btn btn-info btn-sm btn-fill\" type=\"button\" href=\"".URL."lpj/viewlpj/".$value['prokerid']."\">";
                                                          echo "<i class=\"pe-7s-check\"></i> Lihat LPJ";
                                                          echo "</a>"; 
                                                          echo "<span class=\"label label-info\" style=\"font-size:12px;\">LPJ Sudah Di inputkan</span>";  

                                                        // echo "<a class=\"btn btn-success btn-sm btn-fill\" style=\"margin-left: 15px;\" type=\"button\" href=\"".URL."lpj/cetaklpj/".$value['prokerid']."\">";
                                                        // echo "<i class=\"pe-7s-print\"></i>";
                                                        // echo "</a>"; 

                                                    }
                                                    echo "</div>";
                                                    echo "</td>";                                        
                                                  echo "</tr>";
                                                  $no++;
                                                }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!--ROW TABEL-->

                </div>

				 <footer><p>All right reserved. Template by: <a href="#">WebThemez</a></p></footer>
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
