<?php
/**
* 
*/
class m_pengajuanproker extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	function getdetailproker($idproker){
		$statement=$this->db->prepare("SELECT * FROM proker WHERE prokerid =".$idproker);
		$statement->execute();
		return $statement->fetchObject();
	}
	
	function getproker(){ 
		$statement=$this->db->prepare("SELECT * FROM proker p join ormawa o on p.ormawaid=o.ormawaid WHERE statusproker=0");
		$statement->execute();
		return $statement->fetchAll();	
	}

	function getprokerdisetujui(){ 
		$statement=$this->db->prepare("SELECT * FROM proker p join ormawa o on p.ormawaid=o.ormawaid WHERE statusproker=1");
		$statement->execute();
		return $statement->fetchAll();	
	}

	function getprokerditolak(){ 
		$statement=$this->db->prepare("SELECT * FROM proker p join ormawa o on p.ormawaid=o.ormawaid WHERE statusproker=2");
		$statement->execute();
		return $statement->fetchAll();	
	}

	function disetujui($idproker){
		$statement=$this->db->prepare("UPDATE proker set statusproker=1 WHERE prokerid=".$idproker);
		$statement->execute();
	}

	function ditolak($idproker){
		$statement=$this->db->prepare("UPDATE proker set statusproker=2 WHERE prokerid=".$idproker);
		$statement->execute();
	}
	
}

?>