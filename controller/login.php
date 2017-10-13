<?php
	/**
	* 
	*/
	class login extends controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			session::init();
		}
		function index(){
			$this->view->renderhomepage('index');
		}
		function run(){
			$this->model->run();
		}
		function logout(){
			session::destroy();
			header('location:../homepage');
			exit;
		}

		function ubahpassword(){
			$this->view->id=session::get('id');
			$this->view->renderkonten('ubahpassword');
		}

		function ubah(){
			$passbaru=$_POST['passbaru'];
			$repassbaru=$_POST['repassbaru'];
			$id=$_POST['iduser'];
			if ($passbaru == $repassbaru) {
				$this->model->ubah($passbaru,$id);
				header('location:../dashboard');
			} else {
				echo "<script type='text/javascript'>alert('Password baru dan verifikasi berbeda');</script>";
				echo "<script>window.location='".URL."login/ubahpassword/';</script>";				
			}
		}
	}
?>