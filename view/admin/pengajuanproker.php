<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program Kerja</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo URL; ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="<?php echo URL; ?>assets/css/custom-styles.css" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="<?php echo URL; ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

<!-- Modal view proker -->
<div class="modal fade" id="viewproker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Detail Program Kerja</h4>
      </div>
      <div class="modal-body">

        <div class="content">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama Program Kerja</label>
                             <input type="text" id="namaproker" class="form-control" placeholder="Nama Program Kerja">
                        </div>
                    </div>
                       
                         
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Kegiatan</label>
                            <div class="dropdown">
                                  <select class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" padding-left="10px">
                                    Jenis Kegiatan
                                    <span class="caret"></span>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><option value="ekstern">Ekstern</option></li>
                                    <li><option value="intern">Intern</option></li>
                                  </ul>

                                  </select>     
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Detail Jenis</label>
                             <input type="text" id="detailjenis" class="form-control" placeholder="Jenis Proker" >
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi Program Kerja</label>
                            <textarea rows="5" id="deskripsi" class="form-control" placeholder="Here can be your description" ></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group">
                             <label>Tanggal Mulai</label>
                             <input type="text" id="tanggalmulai" class="form-control" >
                        </div>
                    </div>
                                        
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal selesai</label>
                            <input type="text" id="tanggalselesai" class="form-control">
                        </div>
                    </div>
    
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Lingkup Kegiatan</label>
                            <input type="text" id="lingkup" class="form-control" placeholder="Lingkups" >
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label> </label>
                            <input type="hidden" id="prokerid" class="form-control">
                        </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tujuan Kegiatan</label>
                            <textarea rows="5" id="tujuan" class="form-control" placeholder="Here can be your description" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>    
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



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
                       
                    </div>
                </div> 
                 <!-- /. ROW  -->

                 <!--ISI KONTEN-->
                 <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              Pengajuan Program Kerja
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#pengajuan" data-toggle="tab">Pengajuan</a>
                                    </li>
                                    <li class=""><a href="#Disetujui" data-toggle="tab">Disetujui</a>
                                    </li>
                                    <li class=""><a href="#Ditolak" data-toggle="tab">Ditolak</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="pengajuan">
                                        <div class="panel-heading">
                                             DAFTAR PENGAJUAN PROGRAM KERJA                           
                                        </div>

                                        <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                              <thead>
                                                  <tr>
                                                     <th>No.</th>
                                                      <th>Nama Program Kerja</th>
                                                      <th>Nama Ormawa</th>
                                                      <th>Periode</th>
                                                      <th>Detail</th>
                                                      <th>Aksi</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php
                                                      $no=1;
                                                      foreach ($this->dataproker as $key => $value) {
                                                          echo "<td>".$no.'</td>';
                                                          echo "<td>".$value['namaproker'].'</td>';
                                                          echo "<td>".$value['namaOrmawa'].'</td>';
                                                          echo "<td>".$value['periode'].'</td>';
                                                          echo "<td><a class=\"btn btn-warning btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#viewproker\" onclick=\"view(".$value['prokerid'].")\">";
                                                          echo "<i class=\"fa fa-search\"></i>";
                                                          echo "</a></td>"; 
                                                          echo "<td>";                                       
                                                          echo "<div class=\"btn-group\">";

                                                          echo "<a class=\"btn btn-success btn-sm btn-fill\" type=\"button\" href=\"".URL."pengajuanproker/disetujui/".$value['prokerid']."\" style=\"margin-left: 10px\">";
                                                          echo "<i class=\"fa fa-check-square\"></i> ";
                                                          echo "</a>";

                                                           echo "<a class=\"btn btn-danger btn-sm btn-fill\" type=\"button\" href=\"".URL."pengajuanproker/ditolak/".$value['prokerid']."\" style=\"margin-left: 10px\">";
                                                          echo "<i class=\"fa fa-times-circle\"></i> ";
                                                          echo "</a>";
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
                                    <div class="tab-pane fade" id="Disetujui">
                                        <div class="panel-heading">
                                             DAFTAR PROGRAM KERJA DISETUJUI
                                        </div>

                                        <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                              <thead>
                                                  <tr>
                                                     <th>No.</th>
                                                      <th>Nama Program Kerja</th>
                                                      <th>Nama Ormawa</th>
                                                      <th>Periode</th>
                                                      <th>Status Evalauasi</th>
                                                      <th>Detail Proker</th>
                                                      <th>LPJ</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php
                                                      $no=1;
                                                      foreach ($this->dataprokerdisetujui as $key => $value) {
                                                          echo "<td>".$no.'</td>';
                                                          echo "<td>".$value['namaproker'].'</td>';
                                                          echo "<td>".$value['namaOrmawa'].'</td>';
                                                          echo "<td>".$value['periode'].'</td>';
                                                           echo "<td>";
                                                          if ($value['penilaianbpm']==0) {
                                                             echo "<span class=\"label label-danger\" style=\"font-size:12px;\">Belum Dievaluasi</span>";
                                                          } else {
                                                             echo "<span class=\"label label-success\" style=\"font-size:12px;\">Sudah Dievaluasi</span>";
                                                          }
                                                          echo "</td>";
                                                          echo "<td>";                                       
                                                          echo "<div class=\"btn-group\">";

                                                          echo "<a class=\"btn btn-warning btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#viewproker\" onclick=\"view(".$value['prokerid'].")\">";
                                                          echo "<i class=\"fa fa-search\"></i>";
                                                          echo "</a>"; 
                                                          echo "</div>";
                                                          echo "</td>";
                                                          echo "<td>";                                       
                                                          echo "<div class=\"btn-group\">";
                                                          
                                                          
                                                          if ($value['latarbelakang'] == NULL) {
                                                              echo "<span class=\"label label-danger\" style=\"font-size:12px;\">LPJ Belum Di Inputkan</span>"; 
                                                          } else {
                                                              echo "<a class=\"btn btn-info btn-sm\" type=\"button\" href=\"".URL."lpj/viewlpj/".$value['prokerid']."\">";
                                                              echo "<i class=\"fa fa-search\"></i>";
                                                              echo "</a>"; 

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
                                    <div class="tab-pane fade" id="Ditolak">
                                        <div class="panel-heading">
                                             DAFTAR PROGRAM KERJA DITOLAK
                                        </div>

                                        <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
                                              <thead>
                                                  <tr>
                                                     <th>No.</th>
                                                      <th>Nama Program Kerja</th>
                                                      <th>Nama Ormawa</th>
                                                      <th>Periode</th>
                                                      <th>Detail</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php
                                                      $no=1;
                                                      foreach ($this->dataprokerditolak as $key => $value) {
                                                          echo "<td>".$no.'</td>';
                                                          echo "<td>".$value['namaproker'].'</td>';
                                                          echo "<td>".$value['namaOrmawa'].'</td>';
                                                          echo "<td>".$value['periode'].'</td>';
                                                          echo "<td>";                                       
                                                          echo "<div class=\"btn-group\">";

                                                         echo "<a class=\"btn btn-warning btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#viewproker\" onclick=\"view(".$value['prokerid'].")\">";
                                                          echo "<i class=\"fa fa-search\"></i>";
                                                          echo "</a>"; 
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
                            </div>
                        </div>
                    </div>
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

     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo URL; ?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo URL; ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
             
                $('#dataTables-example').dataTable()
              });
    </script>

     <script>
        var view = function(id){
            $.get( "/revisi/pengajuanproker/getdet/"+id, function( data ) {
              var obj = jQuery.parseJSON( data);
              $( "#namaproker" ).val( obj.namaproker );
              $( "#detailjenis" ).val( obj.detailjenis );
              $( "#tanggalmulai" ).val( obj.tanggalmulai );
              $( "#tanggalselesai" ).val( obj.tanggalselesai );
              $( "#tahun" ).val( obj.tahun );
              $( "#lingkup" ).val( obj.lingkup );
              $( "#tujuan" ).val( obj.tujuan );
              $( "#deskripsi" ).val( obj.deskripsi );
              $( "#prokerid" ).val( obj.prokerid );
            });
        }
    </script>
   
</body>
</html>
