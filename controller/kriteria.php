<?php
/**
* 
*/
class kriteria extends Controller{

	function __construct()
	{
		# code...
		# 
		parent::__construct();
		session::init();
	}

	function index(){
		// $this->view->datakriteria=$this->model->getkriteria(session::get('id'));
		// $this->view->nilaimaxmin=$this->model->getmaxmin(session::get('periode'),session::get('idormawa'));
		// $this->view->cekinputrange=$this->model->cekinputrange(session::get('idormawa'),session::get('periode'));
		// $this->view->range=$this->model->rangenilai(session::get('idormawa'),session::get('periode'));
		// $this->view->renderhomepage('ketua/kriteria');

		$this->view->datakriteria=$this->model->getkriteria();
		$this->view->nilaimaxmin=$this->model->getmaxmin();
		$this->view->cekinputrange=$this->model->cekinputrange();
		$this->view->range=$this->model->rangenilai();
		$this->view->renderhomepage('admin/kriteria');
	}

	//buat ambil data id kriteria buat input
	function getinsub($idkriteria){
			$detail=$this->model->getinsub($idkriteria);
			echo json_encode($detail);
		}

	//buat view sub kriteria
	function detkriteria($idkriteria){
		$detailk=$this->model->listsubkr($idkriteria);
		echo json_encode($detailk);
	}

	function createkriteria(){
		$data=array();
		$data['namakriteria']=$_POST['namakriteria'];
		$data['nilaikriteria']=$_POST['nilaikriteria'];
		$data['userid']=session::get('id');
		$this->model->createkriteria($data);
		$this->generate();
		header('location:../kriteria');
	}

	function createsubkriteria(){
		$data=array();
		$data['namasub']=$_POST['namasub'];
		$data['utility']=$_POST['utility'];
		$data['kriteriaid']=$_POST['kriteriaid'];
		$this->model->createsubkriteria($data);
		header('location:../kriteria');
	}

	function deletekriteria($idkriteria){
		$this->model->deletekriteria($idkriteria);
		$this->generate();
		header('location:..');
	}

	function deletesub($idsub){
		$this->model->deletesub($idsub);
		header('location:..');
	}

	//untuk generate kriterianya
	function generate(){
		$k=$this->model->getkriteria();
		$jumlahbobot= $this->model->getbobot();
		$data=array();

        foreach ($k as $key => $value){
        	$kid = $value['kriteriaid'];
            $nilaidb = $value['nilaikriteria']; 
            $hitung = ($nilaidb / $jumlahbobot)*100; 
            $normalisasi = $hitung / 100 ; 
            $data['hitung'] = $hitung;
            $data['normalisasi'] = $normalisasi;
            $data['id'] = $kid;
            $this->model->generate($data);
        }
	}

	function createrange(){

		$data=array();
		$data['mintlayak']=$_POST['mintlayak'];
		$data['pembatas']=$_POST['pembatas'];
		$data['maxlayak']=$_POST['maxlayak'];

		if ($data['pembatas'] < $data['mintlayak']) {
			echo "<script type='text/javascript'>alert('nilai pembatas harus lebih besar dari nilai minimal');</script>";
			echo "<script>window.location='".URL."kriteria';</script>";
		} elseif ($data['pembatas'] > $data['maxlayak']) {
			echo "<script type='text/javascript'>alert('nilai pembatas harus lebih kecil dari nilai maksimal');</script>";
			echo "<script>window.location='".URL."kriteria';</script>";
		} else {
			$this->model->createrange($data);
			header('location:../kriteria');
	}

}
}
?>