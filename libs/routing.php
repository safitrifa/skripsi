<?php
/**
* 
*/
class routing
{
	
	function __construct()
	{
		# code...

		$url=isset($_GET['url'])?$_GET['url']:null;
		$url=rtrim($url,'/');
		$url=explode('/',$url);
		if(empty($url[0])){
			require 'controller/homepage.php';
			$controller=new homepage();
			if(session::get('loggedIn')==false){
				$controller->index();
				return false;
			} else{
				
				$controller->todashboard();
			}
		}

		$file='controller/'.$url[0].'.php';
		if(file_exists($file)){
			require $file;
		} else{
			require 'controller/error.php';
			$error=new error();
			return false;
		} 
		$controller=new $url[0]();
		$controller->loadModel($url[0]);
	
		if(isset($url[2])){
			if(method_exists($controller, $url[1])){
				$controller->{$url[1]}($url[2]);
			}else{
				echo "error";
			}
		} else{
			if(isset($url[1])){
				$controller->{$url[1]}();
			} else{
				$controller->index();
			}
		}
	}
}
?>