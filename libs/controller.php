<?php
	/**
	* 
	*/
	class Controller
	{
		
		function __construct()
		{
			# code...
			$this->view=new view();
		}
		public function loadModel($nama){
			$path='model/m_'.$nama.'.php';
			if(file_exists($path)){
				require 'model/m_'.$nama.'.php';
				$modelNama= 'm_'.$nama;
				$this->model=new $modelNama();
			}
		}

		
	}
?>