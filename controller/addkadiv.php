<?php
/**
* 
*/
class addkadiv extends Controller{

	function __construct()
	{
		# code...
		# 
		parent::__construct();
		session::init();
	}

	function index(){
		$this->view->datakadiv=$this->model->getkadiv(session::get('idormawa'), session::get('periodeid'));
		$this->view->renderkonten('ketua/adduser');
	}

	function createuser(){
		$data=array();
		$data['username']=$_POST['username'];
		// $data['password']=md5('12345');
		$data['password']="12345";
		// $data['password']=$_POST['password'];
		$data['ormawaid']=session::get('idormawa');
		$data['periodeid']=session::get('periodeid');
		$this->model->createuser($data);
		header("location:../addkadiv");
	}

	function deleteuser($iduser){
		$this->model->deleteuser($iduser);
		header("location:..");
	}

}
?>