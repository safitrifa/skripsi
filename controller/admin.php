<?php
/**
* 
*/
class admin extends Controller{

	function __construct()
	{
		# code...
		# 
		parent::__construct();
		session::init();
	}

	function index(){
		//untuk ormawa
		$this->view->listormawa=$this->model->getormawa();

		//untuk periode
		$this->view->listperiode=$this->model->getperiode();

		//untuk ketua
		$this->view->listketua=$this->model->getketua();

		$this->view->renderkonten('admin/indexadmin');
	}

	function getsatuormawa($idormawa){
		$detail=$this->model->getsatuormawa($idormawa);
		echo json_encode($detail);
	}

	function getsatuperiode($idperiode){
		$detail=$this->model->getsatuperiode($idperiode);
		echo json_encode($detail);
	}

	// function getsatuketua($idketua){
	// 	$detail=$this->model->getsatuketua($idketua);
	// 	echo json_encode($detail);
	// }

	//create
	function createormawa(){
		$data=array();
		$data['namaOrmawa']=$_POST['namaOrmawa'];
//		$data['logo']=$_POST['logo'];
		$this->model->createormawa($data);
		header("location:../");
	}

	function createperiode(){
		$data=array();
		$data['periode']=$_POST['periode'];
		$this->model->createperiode($data);
		header("location:../");
	}

	function createketua(){
		$data=array();
		$data['username']=$_POST['username'];
		// $data['password']=$_POST['password'];
		$data['periodeid']=(int)$_POST['periode'];
		$data['ormawaid']=(int)$_POST['ormawa'];
		$this->model->createketua($data);
		header("location:../");
	}

	//DELETE
	function deleteormawa($idormawa){
		$this->model->deleteormawa($idormawa);
		header("location:../");
	}

	function deleteperiode($idperiode){
		$this->model->deleteperiode($idperiode);
		header("location:../");
	}

	// function deleteketua($idketua){
	// 	$this->model->deleteketua($idketua);
	// 	header("location:../");
	// }

	//EDIT
	function editormawa(){
		$data=array();
		$data['ormawaid'] = $_POST['ormawaid1'];
		$data['namaOrmawa']=$_POST['namaOrmawa1'];
		$this->model->editormawa($data);
		header("location:../");
	}

	// function editketua(){
	// 	$data=array();
	// 	$data['userid']=$_POST['userid1'];
	// 	$data['username']=$_POST['username1'];
	// 	$data['password']=$_POST['password1'];
	// 	$data['periodeid']=(int)$_POST['periode1'];
	// 	$data['ormawaid']=(int)$_POST['ormawa1'];
	// 	$this->model->editketua($data);
	// 	header("location:../");
	// }

	function editperiode(){
		$data=array();
		$data['periode']=$_POST['periode2'];
		$data['periodeid']=$_POST['periodeid1'];
		$this->model->editperiode($data);
		header("location:../");
	}

	function aktifkanketua($iduser){
		$this->model->aktifkanketua($iduser);
		echo "<script type='text/javascript'>alert('User Sudah Diaktifkan!');</script>";
		echo "<script>window.location='".URL."admin';</script>";
	}

	function nonaktifkanketua($iduser){
		$this->model->nonaktifkanketua($iduser);
		echo "<script type='text/javascript'>alert('User Berhasil Dinonaktifkan!');</script>";
		echo "<script>window.location='".URL."admin';</script>";
	}

	//================================================evaluasi=====================================
	function evaluasiproker(){
		$this->view->proker=$this->model->getproker();
		$this->view->hariini=$this->model->gethariini();
		$this->view->renderkonten('admin/evalbpm');
	}

	// function getproker(){
	// 	$data=array();
	// 	$data['idormawa']=
	// 	$data['periode']=
	// 	$detailk=$this->model->listsubkr($idkriteria);
	// 	echo json_encode($detailk);
	// }

	
}
?>