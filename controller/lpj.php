<?php
/**
* 
*/
class lpj extends Controller{

	function __construct()
	{
		# code...
		# 
		parent::__construct();
		session::init();
	}

	function formlpj($idproker){
		$this->view->idnyaproker=$idproker;
		$this->view->namaproker=$this->model->getnamaproker($idproker);
		$this->view->renderkonten('kadiv/lpj');
	}


	function viewlpj($idproker){
		$this->view->detail=$this->model->getdetail($idproker);
		
		$ses=session::get('userlevel');
		if ($ses == 1) {
			$this->view->renderkonten('ketua/viewlpj');
		} else if ($ses == 2){
			$this->view->renderkonten('kadiv/viewlpj');
		} else if ($ses == 3){
			$this->view->renderkonten('admin/viewlpj');
		}
	}

	function createlpj(){
		$data=array();
		$data['prokerid']=$_POST['prokerid'];
		$data['latarbelakang']=$_POST['latarbelakang'];
		$data['rasional']=$_POST['rasional'];
		$data['tujuan']=$_POST['tujuan'];
		// $data['tglpelaksanaan']=$_POST['tglpelaksanaan'];
		$data['tempatkegiatan']=$_POST['tempatkegiatan'];
		$data['peserta']=$_POST['peserta'];
		$data['sesuai']=$_POST['sesuai'];
		$data['kendala']=$_POST['kendala'];
		$data['solusi']=$_POST['solusi'];

		$this->model->createlpj($data);

		header('location:../evaluasi');
	}

	function cetaklpj($idproker){
		$this->view->data = $this->model->getdetail($idproker);
		// echo $data['namaproker'];
        // include 'view/ketua/cetakLPJ.php';
        $this->view->renderkonten('ketua/cetakLPJ');
	}

}
?>
