<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>rekomendasi</title>
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

<!--view sub-->
<div class="modal fade" id="viewsubkriteria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Sub Kriteria</h4>
      </div>
      <div class="modal-body">
       
        <div class="table">
            <table class="small table table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr style="background:#E0E0E0;">
                        <th>Nama Sub Kriteria</th>
                        <th>Utility</th>
                        <th>Nilai Sub</th>
                    </tr>
                </thead>
                <tbody id="detailkriteria">
                             
                </tbody>
            </table>
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--=========================================================================================-->
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
                        <a  href="<?php echo URL; ?>evaluasi"><i class="fa fa-check-square"></i> Evaluasi</a>
                    </li>
                     <?php  
                        if (session::get('ormawalevel') == 2) {
                            echo "<li>";
                            echo "<a href=\"".URL."evaluasiormawa\"><i class=\"fa fa-check-square\"></i> Evaluasi Ormawa</a>";
                            echo "</li>";
                        }
                    ?>
                    <li>
                        <a class="active-menu" href="<?php echo URL; ?>rekomendasi"><i class="fa fa-check-square"></i> Rekomendasi</a>
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
                           Rekomendasi<br>
                            <small>Daftar Program kerja yang di rekomendasikan</small>
                        </h1>
                    </div>
                </div> 

                <!--ISI KONTEN-->
                <div class="row">
                    <div class="col-md-12">
                        

                                <?php  
                                     if ( $this->cek['periode'] == 0) {
                                        echo "<div class=\"alert alert-danger\" role=\"alert\">Maaf periode sebelumnya tidak ada</div>";
                                    } else if ($this->cek['adaproker'] == 0 && $this->cek['periode'] !=0){
                                        echo "<div class=\"alert alert-warning\" role=\"alert\">Belum ada proker yang di evaluasi dari periode sebelumnya</div>";
                                    } else if ($this->cek['adaproker'] != 0 && $this->cek['periode'] !=0){
                                        echo "<div class=\"panel panel-default\">";
                                        echo "<div class=\"panel-heading\">Tabel Rekomendasi</div>";
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
                                        echo "<th>Aksi</th>";
                                        echo "<tr>";
                                        echo "<td colspan=\"2\"></td>";
                                        $ormawalevel=session::get('ormawalevel');
                                         for ($i=0; $i < count($this->hsl)+3; $i++) { 
                                            echo "<td>Ormawa</td>";
                                            if ($ormawalevel == 2) {
                                                echo "<td>BPM</td>";
                                            } elseif($ormawalevel == 3){
                                                echo "<td>BEM</td>";
                                            }
                                        }
                                        echo "<td colspan=\"3\"></td>";
                                        echo "</tr>";
                                        // echo "</thead>";
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

                                                    if ($rata2 >= $this->range['mintlayak'] && $rata2 <=  $this->range['nilaipembatas']){
                                                        echo "<td>Tidak Direkomendasikan</td>";
                                                    } elseif ($rata2 > $this->range['nilaipembatas'] && $rata2 <=  $this->range['maxlayak']){
                                                         echo "<td>Direkomendasikan</td>";
                                                    }
                                                
                                                echo "<td>";                             
                                                echo "<div class=\"btn-group\">";
                                                echo "<a class=\"btn btn-info btn-sm\" type=\"button\" href=\"".URL."lpj/viewlpj/".$value['prokerid']."\">";
                                                echo "<i class=\"pe-7s-check\"></i> Lihat LPJ";
                                                echo "</a>";
                                                echo "</div>";
                                                echo "</td>";
                                               
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
                                                Tidak Direkomendasikan: <?php echo $this->range['mintlayak']; ?> - <?php echo $this->range['nilaipembatas']; ?><br>
                                                Direkomendasikan: < <?php echo $this->range['nilaipembatas']; ?> - <?php echo $this->range['maxlayak']; ?><br><br>

                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <th>Kriteria</th>
                                                                <th>Bobot Kriteria</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            foreach ($this->kriteria as $key => $value) {
                                                                echo "<tr>";
                                                                echo "<td>".$value['namakriteria'].'</td>';
                                                                echo "<td>".$value['bobotkriteria'].'</td>';
                                                                echo "<td>";                                       
                                                                echo "<div class=\"btn-group\">";

                                                                echo "<a class=\"btn btn-success btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#viewsubkriteria\" onclick=\"vsub(".$value['kriteriaid'].")\" style=\"margin-left: 10px\">";
                                                                echo "<i class=\"fa fa-search\"></i> view";
                                                                echo "</a>";
                                                                echo "</div>";
                                                                echo "</td>";
                                                                echo "</tr>";
                                                            }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>

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
    
     <!--view detail pake tabel modal-->
    <script type="text/javascript">
           var vsub= function(id){
                $.getJSON('/revisi/rekomendasi/detkriteria/'+id, function(result){
                    for (var i = 0; i < result.length; i++) {
                        var subkr = result[i];
                        // console.log(subkr);
                        $('#detailkriteria').append("<tr><td>"+subkr.namasub+"</td><td>"+subkr.utility+"</td><td>"+subkr.ntemp+"</td></tr>"); 
                    };
                });
            }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#viewsubkriteria").on("hidden.bs.modal", function() {
                $(this).find('tbody').empty();
            });
        });
    </script>

   
</body>
</html>
