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
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<!-- MODAL VIEW-->
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

<!--modal edit-->
<div class="modal fade" id="editproker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            <form action="<?php echo URL; ?>proker/editproker" method="POST">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama Program Kerja</label>
                             <input type="text" id="namaproker1" class="form-control" placeholder="Nama Program Kerja" name="namaproker1" required>
                        </div>
                    </div>
                       
                         
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Kegiatan</label>
                            <div class="dropdown">
                                  <select class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" padding-left="10px" name="jeniskegiatan1">
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
                             <input type="text" id="detailjenis1" class="form-control" placeholder="Jenis Proker" name="detailjenis1" required>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi Program Kerja</label>
                            <textarea rows="5" id="deskripsi1" class="form-control" placeholder="Here can be your description" name="deskripsi1" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                   <div class="col-md-4">
                         <div class="form-group">
                             <label>Tanggal Mulai</label>
                             <input type='date' id = "tanggalmulai1" class="form-control" placeholder="Tanggal" name="tanggalmulai1" required>
                        </div>
                    </div>
                                        
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type='date' id = "tanggalselesai1" class="form-control" placeholder="Bulan" name="tanggalselesai1" required>
                        </div>
                    </div>
    
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Lingkup Kegiatan</label>
                            <input type="text" id="lingkup1" class="form-control" placeholder="Lingkups" name="lingkup1" required>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label> </label>
                            <input type="hidden" id="prokerid1" class="form-control" placeholder="proker id" name="prokerid1" required>
                        </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tujuan Kegiatan</label>
                            <textarea rows="5" id="tujuan1" class="form-control" placeholder="Here can be your description" name="tujuan1" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>    
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal input proker -->
<div class="modal fade" id="inputproker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Data Baru Program Kerja</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>proker/createproker" method="POST" name=finput>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama Program Kerja</label>
                             <input type="text" class="form-control" placeholder="Nama Program Kerja" name="namaproker" required>
                        </div>
                    </div>
                       
                         
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Kegiatan</label>
                            <div class="dropdown">
                                  <select class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" padding-left="10px" name="jeniskegiatan">
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
                             <input type="text" class="form-control" placeholder="Jenis Proker" name="detailjenis" required>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Deskripsi Program Kerja</label>
                            <textarea rows="5" class="form-control" placeholder="Here can be your description" name="deskripsi" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group">
                             <label>Tanggal Mulai</label>
                             <input type='date' class="form-control" placeholder="Tanggal" name="tanggalmulai" id="tglmulai" required>
                        </div>
                    </div>
                                        
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type='date' class="form-control" placeholder="Bulan" name="tanggalselesai" id="tglselesai" onclick="cektanggal()" required><span id="eror"></span>
                        </div>
                    </div>
    
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Lingkup Kegiatan</label>
                            <input type="text" class="form-control" placeholder="Lingkups" name="lingkup" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tujuan Kegiatan</label>
                            <textarea rows="5" class="form-control" placeholder="Here can be your description" name="tujuan" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>      
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right" id="tambah" >Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- BATAS MODAL-->



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
                        <a  href="<?php echo URL; ?>dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a class="active-menu" href="<?php echo URL; ?>proker"><i class="fa fa-file-text"></i> Program Kerja</a>
                    </li>
                    <li>
                        <a  href="<?php echo URL; ?>evaluasi"><i class="fa fa-check-square"></i> Evaluasi</a>
                    </li>
                    <li>
                        <a  href="<?php echo URL; ?>rekomendasi"><i class="fa fa-check-square"></i> Rekomendasi</a>
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
                            Program Kerja
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->

                 <!--ISI KONTEN-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 DAFTAR PROGRAM KERJA                           
                            </div>


                            <div class="panel-heading">
                                 <button class="btn btn-info btn-fill" type="button" data-toggle="modal" data-target="#inputproker"> Data Baru </button>
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
                                                Untuk menginputkan program kerja baru klik tombol DATA BARU<br>
                                                 Untuk melihat detail program kerja klik tombol VIEW<br>
                                                 Untuk mengubah program kerja klik tombol EDIT<br>
                                                 Untuk menghapus program kerja klik tombol HAPUS
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
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach ($this->dataproker as $key => $value) {
                                                    echo "<tr class=\"odd gradeX\">";
                                                    echo "<td>".$no.'</td>';
                                                    echo "<td>".$value['namaproker'].'</td>';
                                                    echo "<td>";
                                                    if ($value['statusproker'] == 1) {
                                                        echo "<span class=\"label label-success\" style=\"font-size:12px;\">Disetujui</span>"; 
                                                    } else if ($value['statusproker'] == 2) {
                                                        echo "<span class=\"label label-danger\" style=\"font-size:12px;\">Ditolak</span>"; 
                                                    } else if ($value['statusproker'] == 0) {
                                                        echo "<span class=\"label label-info\" style=\"font-size:12px;\">Menunggu Approval BPMF</span>"; 
                                                    }
                                                    echo "</td>";
                                                    echo "<td>";
                                                    if ($value['statusproker'] == 1 || $value['statusproker'] == 2) {
                                                        echo "<div class=\"btn-group\">";
                                                        echo "<a class=\"btn btn-warning btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#viewproker\" onclick=\"view(".$value['prokerid'].")\">";
                                                        echo "<i class=\"fa fa-search\"></i> ";
                                                        echo "</a>";

                                                        echo "<a class=\"btn btn-info btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#editproker\" onclick=\"edit(".$value['prokerid'].")\" style=\"margin-left: 10px\" disabled>";
                                                        echo "<i class=\"fa fa-pencil\"></i>";
                                                        echo "</a>";

                                                        echo "<a class=\"btn btn-danger btn-sm btn-fill\" type=\"button\" onclick='javascript:confirmationDelete($(this));return false;' href=\"".URL."proker/delete/".$value['prokerid']."\" style=\"margin-left: 10px\" disabled>";
                                                        echo "<i class=\"fa fa-times-circle\"></i> ";
                                                        echo "</a>";
                                                        echo "</div>";
                                                    } else if ($value['statusproker'] == 0) {
                                                        echo "<div class=\"btn-group\">";
                                                        echo "<a class=\"btn btn-warning btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#viewproker\" onclick=\"view(".$value['prokerid'].")\">";
                                                        echo "<i class=\"fa fa-search\"></i> ";
                                                        echo "</a>";

                                                        echo "<a class=\"btn btn-info btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#editproker\" onclick=\"edit(".$value['prokerid'].")\" style=\"margin-left: 10px\">";
                                                        echo "<i class=\"fa fa-pencil\"></i> ";
                                                        echo "</a>";

                                                        echo "<a class=\"btn btn-danger btn-sm btn-fill\" type=\"button\" onclick='javascript:confirmationDelete($(this));return false;' href=\"".URL."proker/delete/".$value['prokerid']."\" style=\"margin-left: 10px\">";
                                                        echo "<i class=\"fa fa-times-circle\"></i> ";
                                                        echo "</a>";
                                                        echo "</div>";
                                                    }
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

    <script>
        var edit = function(id){
            $.get( "/revisi/proker/getdet/"+id, function( data ) {
              var obj = jQuery.parseJSON( data);
              console.log(obj);
              $( "#namaproker1" ).val( obj.namaproker );
              $( "#detailjenis1" ).val( obj.detailjenis );
              $( "#lingkup1" ).val( obj.lingkup );
              $( "#tujuan1" ).val( obj.tujuan );
              $( "#deskripsi1" ).val( obj.deskripsi );
              $( "#prokerid1" ).val( obj.prokerid );
              $( "#tanggalselesai1" ).val( obj.tanggalselesai);
              $( "#tanggalmulai1" ).val( obj.tanggalmulai);                        

            });
        }
    </script>

    <script>
        var view = function(id){
            $.get( "/revisi/proker/getdet/"+id, function( data ) {
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

    <script>
       function confirmationDelete(anchor){
            var conf = confirm('Apakah Anda Yakin Ingin Menghapus Program Kerja ini?');
            if(conf)
                window.location=anchor.attr("href");
        }
    </script>
    
   
</body>
</html>
