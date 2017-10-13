<?php
	/**
	* 
	*/
	class view
	{
		
		function __construct()
		{

		}
		public function renderkonten($nama, $noInclude=false)
		{
			require 'view/'.$nama.'.php';
		}
		public function renderhomepage($nama, $noInclude=false)
		{
			require 'view/'.$nama.'.php';
		}

	}
?>