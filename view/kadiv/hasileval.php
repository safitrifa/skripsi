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
                        <a  href="<?php echo URL; ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="<?php echo URL; ?>proker"><i class="fa fa-file-text"></i> Program Kerja</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo URL; ?>evaluasi"><i class="fa fa-check-square"></i> Evaluasi</a>
                    </li>
                    <li>
                        <a  href="<?php echo URL; ?>rekomendasi"><i class="fa fa-check-square"></i> rekomendasi</a>
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
                            HASIL EVALUASI DAN REKOMENDASI<br>
                            <small>Daftar Program kerja extern yang dapat di rekomendasikan</small>
                        </h1>
                    </div>
                </div> 

                <!--ISI KONTEN-->
                <div class="row">
                    <div class="col-md-12">
                        

                                <?php  
                                    if ($this->cek == 0) {
                                        echo "<div class=\"alert alert-warning\" role=\"alert\">BELUM ADA PROGRAM KERJA YANG DI EVALUASI</div>";
                                    } else {
                                        echo "<div class=\"panel panel-default\">";
                                        echo "<div class=\"panel-heading\">Tabel Hasil Perhitungan</div>";
                                         echo "<div class=\"panel-body\">";
                                        echo "<div class=\"table-responsive\">";
                                        echo "<table class=\"table table-striped table-bordered table-hover\">";

                                        // echo "<thead>";
                                        echo "<th>No.</th>";
                                        echo "<th>Nama Program Kerja</th>";
                                                
                                            foreach ($this->kriteria as $key => $kr) {
                                                echo "<th colspan=\"2\">".$kr['namakriteria'].'</th>';
                                            }
                                                
                                        echo "<th colspan=\"2\">Nilai Akhir</th>";
                                        echo "<th>Rata-Rata</th>";
                                        echo "<th>Kesimpulan</th>";
                                        // echo "</thead>";
                                        echo "<tr>";
                                        echo "<td colspan=\"2\"></td>";
                                         $ormawalevel=session::get('ormawalevel');
                                         for ($i=0; $i < count($this->kriteria)+1; $i++) { 
                                            echo "<td>Ormawa</td>";
                                            echo "<td>BPMF</td>";
                                        }
                                        echo "<td colspan=\"3\"></td>";
                                        echo "</tr>";
                                        echo "<tbody>";
                 
                                        $no=1;
                                        foreach ($this->hsl as $key => $value) {
                                            if ($value['penilaian'] != 0 && $value['penilaianbpm'] != 0) {
                                                echo "<tr>";
                                                echo "<td>".$no.'</td>';
                                                echo "<td>".$value['namaproker'].'</td>';
                                                foreach ($this->nilai as $key => $n) {
                                                    if ($value['prokerid'] == $n['oprokerid']) {
                                                        if ($n['oidkriteria'] == $n['bidkriteria']) {
                                                             echo "<td>";
                                                            // echo number_format((double)$n['ntemp'],5,'.', '');
                                                            echo $n['ontemp'];
                                                            echo "</td>";

                                                            echo "<td>";
                                                            // echo number_format((double)$n['ntemp'],5,'.', '');
                                                            echo $n['bntemp'];
                                                            echo "</td>";
                                                        }
                                                    }
                                                }


                                                echo "<td>";
                                                // echo number_format((double)$value['penilaian'],5,'.', '');
                                                 echo $value['penilaian'];
                                                echo "</td>";                             
                                                echo "<td>";
                                                // echo number_format((double)$value['penilaian'],5,'.', '');
                                                 echo $value['penilaianbpm'];
                                                echo "</td>"; 
                                                $rata2=($value['penilaian']+$value['penilaianbpm'])/2;
                                                echo "<td>".$rata2."</td>";
                                                echo "";
                                                echo "</tr>";
                                                $no++;
                                            }
                                        }                                           

                                        echo "</tbody>";
                                        echo "</table>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        
                                    }                                
                                ?>                              
                            
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Keterangan                            
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
