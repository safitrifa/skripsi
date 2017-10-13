<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kriteria</title>
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

<!-- Modal input sub -->
<div class="modal fade" id="inputsub" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Data Baru Subkriteria</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>kriteria/createsubkriteria" method="POST" name="insubkriteria">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama Sub Kriteria</label>
                             <input type="text" class="form-control" placeholder="Sub Kriteria" value="" name="namasub" required>
                        </div>
                    </div>
                       
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Utility</label>
                             <input type="number" class="form-control" placeholder="Utility" data-toggle="tooltip" data-placement="left" title="HARUS ANGKA YAA" name="utility" oninput="cekutility()" required><span id="ermsg1"></span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                             <input type="hidden" class="form-control" id="kriteriaid" data-toggle="tooltip" data-placement="left" name="kriteriaid" required>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Subkriteria</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal input kriteria -->
<div class="modal fade" id="inputkriteria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Data Baru Kriteria</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>kriteria/createkriteria" method="POST" name="inkriteria">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama Kriteria</label>
                             <input type="text" class="form-control" placeholder="Kriteria" value="" name="namakriteria" required>
                        </div>
                    </div>
                       
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nilai Kriteria</label>
                             <input type="number" class="form-control" placeholder="Bobot" data-toggle="tooltip" data-placement="left" title="HARUS ANGKA YAA" name="nilaikriteria" oninput ="ceknilai()" required><span id="ermsg"></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

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
                        <th>Aksi</th>
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


<!--input range k=kesimpulan-->
<div class="modal fade" id="inputrange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Data Range Kesimpulan</h4>
      </div>
      <div class="modal-body">
       
        <div class="content">
            <form action="<?php echo URL; ?>kriteria/createrange" method="POST">
                
                <div class="row">
                    <div class="col-md-9">
                         <label>Range Nilai Kesimpulan Rekomendasi</label>
                     </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Minimal</label>
                             <input type="number" class="form-control" placeholder="Minimal" name="mintlayak" readonly value="<?php echo $this->nilaimaxmin['min']; ?>">
                        </div>
                    </div>
                       
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nilai Pembatas</label>
                             <input type="number" class="form-control" placeholder="Pembatas" data-toggle="tooltip" data-placement="left" title="HARUS ANGKA YAA" name="pembatas" required><span id="ermsg2" ></span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Maksimal</label>
                             <input type="number" class="form-control" placeholder="Maksimal" data-toggle="tooltip" data-placement="left" title="HARUS ANGKA YAA" name="maxlayak" value="<?php echo $this->nilaimaxmin['max']; ?>" readonly><span id="ermsg1"></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
        </div>

      </div> <!-- modal body-->
      <div class="modal-footer">
        <button type="submit" class="btn btn-info btn-fill pull-right">Buat Range</button>
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
                        <a href="<?php echo URL; ?>rekomendasi"><i class="fa fa-check-square"></i> rekomendasi</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo URL; ?>kriteria"><i class="fa fa-th-list"></i> Kriteria & Sub Kriteria</a>
                    </li>
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
                            Kriteria dan Sub Kriteria
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
                                 DAFTAR KRITERIA EVALUASI                            
                            </div>


                            <div class="panel-heading">
                                 <button class="btn btn-info btn-fill" type="button" data-toggle="modal" data-target="#inputkriteria"> Data Baru </button>
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
                                                Setiap nilai yang diinputkan berdasar pada ketua.<br>
                                                Inputkan range apabila semua kriteria dan sub kriteria telah diinputkan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>

                              
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                   Info Panel
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Nilai Maksimal Yang didapat dari perhitungan adalah: <?php echo $this->nilaimaxmin['max'];?><br>
                                        Nilai Minimal Yang didapat dari perhitungan adalah: <?php echo $this->nilaimaxmin['min'];?><br>
                                        <br>

                                <?php  
                                    if ($this->cekinputrange == false) {
                                        # code...
                                    
                                    echo "Tentukan Range Kesimpulan Kelayakan Kontinuitas!";
                                    echo "</p>";
                                     echo "<div class=\"panel-heading\">";
                                         echo "<button class=\"btn btn-warning btn-fill\" type=\"button\" data-toggle=\"modal\" data-target=\"#inputrange\"> Masukkan Range Rekomendasi </button>";
                                    echo "</div>";
                                    } else {
                                        echo "Range nilai kesimpulan: <br>";
                                        echo "TIDAK DIREKOMENDASIKAN: ".$this->range['mintlayak']." - ".$this->range['nilaipembatas'];
                                        echo "<br>DIREKOMENDASIKAN : >".$this->range['nilaipembatas']." - ".$this->range['maxlayak'];
                                        echo "</p>";  
                                    }

                                ?>
                                </div>
                            </div>
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kriteria</th>
                                                <th>Nilai</th>
                                                <th>Bobot(%)</th>
                                                <th>Normalisasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;
                                                foreach ($this->datakriteria as $key => $value) {
                                                    echo "<tr>";
                                                    echo "<td>".$no.'</td>';
                                                    echo "<td>".$value['namakriteria'].'</td>';
                                                    echo "<td>".$value['nilaikriteria'].'</td>';
                                                    echo "<td>".$value['bobotkriteria'].'</td>';
                                                    echo "<td>".$value['normalisasi'].'</td>';
                                                    echo "<td>";                                       
                                                    echo "<div class=\"btn-group\">";
                                                    echo "<a class=\"btn btn-info btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#inputsub\" onclick=\"insub(".$value['kriteriaid'].")\">";
                                                    echo "<i class=\"fa fa-plus\"></i> Sub";
                                                    echo "</a>";

                                                    echo "<a class=\"btn btn-success btn-sm btn-fill\" type=\"button\" data-toggle=\"modal\" href=\"#viewsubkriteria\" onclick=\"vsub(".$value['kriteriaid'].")\" style=\"margin-left: 10px\">";
                                                    echo "<i class=\"fa fa-search\"></i> view";
                                                    echo "</a>";

                                                    echo "<a class=\"btn btn-danger btn-sm btn-fill\" type=\"button\" onclick='javascript:confirmationDeleteKriteria($(this));return false;' href=\"".URL."kriteria/deletekriteria/".$value['kriteriaid']."\" style=\"margin-left: 10px\">";
                                                    echo "<i class=\"fa fa-times-circle\"></i> Hapus";
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

    <!--input subkriteria-->
    <script>
        var insub = function(id){
            $.get( "/revisi/kriteria/getinsub/"+id, function( data ) {
              var obj = jQuery.parseJSON( data);
              $( "#kriteriaid" ).val( obj.kriteriaid );
            });
        }
    </script>

    <!--untuk confrim hapus kriteria-->
    <script>
       function confirmationDeleteKriteria(anchor){
            var conf = confirm('Apakah Anda Yakin Ingin Menghapus Kriteria Ini?');
            if(conf)
                window.location=anchor.attr("href");
        }
    </script>

    <!--view detail pake tabel modal-->
    <script type="text/javascript">
           var vsub= function(id){
            $('#detailkriteria').empty();
                $.getJSON('/revisi/kriteria/detkriteria/'+id, function(result){
                    for (var i = 0; i < result.length; i++) {
                        var subkr = result[i];
                        // console.log(subkr);
                        $('#detailkriteria').append("<tr><td>"+subkr.namasub+"</td><td>"+subkr.utility+"</td><td>"+subkr.ntemp+"</td><td><a class='btn btn-danger btn-sm btn-fill' type='button' onclick='javascript:confirmationDeleteSub($(this));return false;' href='<?php echo URL; ?>kriteria/deletesub/"+subkr.subid+"' style='margin-left: 10px'><i class='fa fa-times-circle'></i></a></td></tr>"); 
                    };
                });
            }
    </script>


    <!--untuk confrim hapus subkriteria-->
    <script>
       function confirmationDeleteSub(anchor){
            var conf = confirm('Apakah Anda Yakin Ingin Menghapus Sub Kriteria Ini?');
            if(conf)
                window.location=anchor.attr("href");
        }
    </script>


    <!--cek nilai kriteria-->
    <script type="text/javascript">
        function ceknilai(){
            if (inkriteria.nilaikriteria.value < 0 || inkriteria.nilaikriteria.value > 100) {
                document.getElementById('ermsg').innerHTML="angka harus 0-100";
            }
        }
    </script>

    <!--cek nilai kriteria-->
    <script type="text/javascript">
        function cekutility(){
            if (insubkriteria.utility.value < 0 || insubkriteria.utility.value > 100) {
                document.getElementById('ermsg1').innerHTML="angka harus 0-100";
            }
        }
    </script>

 
</body>
</html>
