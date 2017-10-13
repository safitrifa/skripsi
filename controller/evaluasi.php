<?php
/**
* 
*/
class evaluasi extends Controller{

	function __construct()
	{
		# code...
		# 
		parent::__construct();
		session::init();
	}

	function index(){
		$this->view->hariini=$this->model->gethariini();
		$this->view->dataproker=$this->model->getproker(session::get('idormawa'),session::get('periode'));
		
		if (session::get('userlevel') == 1) {
			$this->view->renderkonten('ketua/evalketua');
		} elseif (session::get('userlevel') == 2){
			$this->view->renderkonten('kadiv/evalkadiv');
		}

	}

	function penilaian($idproker){
		$this->view->idnyaproker=$idproker;
		$this->view->namaproker=$this->model->getnamaproker($idproker);
		$this->view->subkrit=$this->model->listsub();
		$ses=session::get('userlevel');


			$this->view->datakriteria=$this->model->getkriteria();
			$cek=$this->model->cekevaluasi();

			if ($cek['adarange'] == false  && $cek['adakriteria'] == false) {
				if ($ses==1 || $ses ==2) {
					echo "<script type='text/javascript'>alert('Range kesimpulan dan kriteria belum ada, harap inputkan range dan kriteria pada halaman kriteria');</script>";
					echo "<script>window.location='".URL."evaluasi';</script>";
				} elseif ($ses==3) {
					echo "<script type='text/javascript'>alert('Range kesimpulan dan kriteria belum ada, harap inputkan range dan kriteria pada halaman kriteria');</script>";
					echo "<script>window.location='".URL."admin/evaluasiproker';</script>";
				}
				
			} elseif ($cek['adarange'] == false && $cek['adakriteria'] == true) {
				if ($ses==1 || $ses ==2) {
					echo "<script type='text/javascript'>alert('Range kesimpulan belum ada, harap hubungi BPMF untuk menginputkan range');</script>";
					echo "<script>window.location='".URL."evaluasi';</script>";
				} elseif($ses==3){
					echo "<script type='text/javascript'>alert('Range kesimpulan belum ada, harap inputkan range pada halaman kriteria');</script>";
					echo "<script>window.location='".URL."admin/evaluasiproker';</script>";
				}

			} elseif ($cek['adarange'] == true && $cek['adakriteria'] == true) {
				
				if ($ses == 1) {
					$this->view->renderkonten('ketua/evaluasi');
				} else if ($ses == 2){
					$this->view->renderkonten('kadiv/evaluasi'); 
				} else if ($ses == 3){
					$this->view->renderkonten('admin/evaluasi'); 
				} 
			}
	}

	function hitung(){
		$namakriteria=$this->model->getkriteria();
		$data=array();
		$prokerid= $_POST['prokerid'];
		$nilaiakhir=0;
		foreach ($namakriteria as $key => $a) {
			$idk=(string)$a['kriteriaid']; 
			if ($_POST[$idk] == 0) {
				$data[$idk] = 0;
			} else {
				$data[$idk]=(double)$_POST[$idk]; 
			}
			$nilaitemp=$data[$idk]*$a['normalisasi']; 
			$nilaiakhir+=$nilaitemp; 
			
			$this->model->hitung($prokerid,(int)$idk, $data[$idk], $nilaitemp); 
		}

		echo $nilaiakhir;
		$this->model->updatenilai($nilaiakhir, $prokerid);
		header('location:../evaluasi');
	}

	function hasil(){
		$this->view->kriteria=$this->model->getkriteria();
		$this->view->nilai=$this->model->getnilai();
		$this->view->hsl=$this->model->gethasil(session::get('idormawa'), session::get('periode'));
		$this->view->range=$this->model->rangenilai();
		$this->view->cek=(double)$this->model->cek(session::get('idormawa'), session::get('periode'));
		$ses=session::get('userlevel');
		if ($ses == 1) {
			$this->view->renderkonten('ketua/hasileval');
		} else if ($ses == 2){
			$this->view->renderkonten('kadiv/hasileval');
		}
	}	


	function hitungbpm(){
		$namakriteria=$this->model->getkriteria();
		$data=array();
		$prokerid= $_POST['prokerid'];
		$nilaiakhir=0;
		foreach ($namakriteria as $key => $a) {
			$idk=(string)$a['kriteriaid']; 
			if ($_POST[$idk] == 0) {
				$data[$idk] = 0;//utility
			} else {
				$data[$idk]=(double)$_POST[$idk]; 
			}
			$nilaitemp=$data[$idk]*$a['normalisasi']; 
			$nilaiakhir+=$nilaitemp; 
			
			$this->model->hitungbpm($prokerid,(int)$idk, $data[$idk], $nilaitemp); 
		}

		echo $nilaiakhir;
		$this->model->updatenilaibpm($nilaiakhir, $prokerid);
		header('location:../admin/evaluasiproker');
	}
}

?>
