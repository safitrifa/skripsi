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


                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Program Kerja</th>
                                                <th>Nama Ormawa</th>
                                                <th>Tanggal Selesai Pelaksanaan</th>
                                                <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $no=1;
                                              foreach ($this->proker as $key => $value) {
                                                   echo "<tr>";
                                                    echo "<td>".$no.'</td>';
                                                    echo "<td>".$value['namaproker'].'</td>';
                                                    echo "<td>".$value['namaOrmawa'].'</td>';
                                                    echo "<td>".$value['tanggalselesai'].'</td>';
                                                    echo "<td>";                                       
                                                    echo "<div class=\"btn-group\">";

                                                    if (new DateTime($value['tanggalselesai']) > new DateTime($this->hariini)) {
                                                        echo "<span class=\"label label-danger\" style=\"font-size:12px;\">Belum bisa di evaluasi</span>";
                                                    } else if (new DateTime($value['tanggalselesai']) < new DateTime($this->hariini)){
                                                        if ($value['penilaianbpm'] == 0) {
                                                            echo "<a class=\"btn btn-danger btn-sm btn-fill\" type=\"button\" href=\"".URL."evaluasi/penilaian/".$value['prokerid']."\">";
                                                            echo "<i class=\"pe-7s-check\"></i> Evaluasi";
                                                            echo "</a>";
                                                        }
                                                    }
                                                    echo "</div";
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

    <script>
        var edit = function(id){
            $.get( "/skripsi/proker/getdet/"+id, function( data ) {
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
            $.get( "/skripsi/proker/getdet/"+id, function( data ) {
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
