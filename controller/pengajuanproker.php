<?php
	/**
	* 
	*/
	class pengajuanproker extends controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			session::init();
		}
		function index(){
			$this->view->dataproker=$this->model->getproker();
			$this->view->dataprokerdisetujui=$this->model->getprokerdisetujui();
			$this->view->dataprokerditolak=$this->model->getprokerditolak();
			$this->view->renderkonten('admin/pengajuanproker');
		}

		function disetujui($idproker){
			$this->model->disetujui($idproker);
			header('location:../');
		}

		function ditolak($idproker){
			$this->model->ditolak($idproker);
			header('location:../');
		}

		function getdet($idproker){
			$detail=$this->model->getdetailproker($idproker);
			echo json_encode($detail);
		}
		
	}
?>