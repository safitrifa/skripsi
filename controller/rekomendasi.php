<?php
/**
* 
*/
class rekomendasi extends Controller{

	function __construct()
	{
		# code...
		# 
		parent::__construct();
		session::init();
	}

	function index(){
		$idperiodesebelumnya=(session::get('periodeid'))-1;
		$periodesebelum=$this->model->getperiodesebelum($idperiodesebelumnya);
		$this->view->cek=$this->model->cek($periodesebelum, $idperiodesebelumnya, session::get('idormawa'));//buatngecek apa ada proker yg uda di eval sama ada ap angga periode sebelumnya itu
		$this->view->kriteria=$this->model->getkriteriarekom();
		$this->view->nilai=$this->model->getnilai();
		$this->view->hsl=$this->model->gethasil(session::get('idormawa'), $periodesebelum);
		$this->view->range=$this->model->rangenilai();

		if (session::get('userlevel') == 1) {
			$this->view->renderkonten('ketua/rekomendasi');
		} elseif (session::get('userlevel') == 2){
			$this->view->renderkonten('kadiv/rekomendasi');
		}
	}

	//buat view sub kriteria
	function detkriteria($idkriteria){
		$detailk=$this->model->listsubkr($idkriteria);
		echo json_encode($detailk);
	}
}
