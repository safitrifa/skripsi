<?php
/**
* 
*/
class dashboard extends controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		session::init();
		$logged=session::get('loggedIn');
		
	}
	function index(){
		$userlevel=session::get('userlevel');
		if($userlevel==1){
			$this->view->hasil=$this->model->datadashboard(session::get('idormawa'), session::get('periode'));
			$this->view->renderkonten('ketua/indexketua');
		} elseif($userlevel=='2'){
			$this->view->hasilk=$this->model->datadashboard(session::get('idormawa'), session::get('periode'));
			$this->view->renderkonten('kadiv/indexkadiv');
		} elseif($userlevel=='3'){
			//untuk ormawa
			$this->view->listormawa=$this->model->getormawa();

			//untuk periode
			$this->view->listperiode=$this->model->getperiode();

			//untuk ketua
			$this->view->listketua=$this->model->getketua();
			$this->view->renderkonten('admin/indexadmin');
		}
	}
}
?>