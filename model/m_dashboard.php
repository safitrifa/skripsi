<?php
/**
* 
*/
class m_dashboard extends Model
{
	
	function __construct()
	{
		# code...
		# 
		parent::__construct();
	}

	//VIEW
	function getormawa(){
		$statement=$this->db->prepare("SELECT * FROM ormawa");
		$statement->execute();
		return $statement->fetchAll();
	}

	function getperiode(){
		$statement=$this->db->prepare("SELECT * FROM periode");
		$statement->execute();
		return $statement->fetchAll();
	}

	function getketua(){
		$statement=$this->db->prepare("SELECT * FROM user u join periode p on u.periodeid = p.periodeid join ormawa o on u.ormawaid=o.ormawaid WHERE level=1");
		$statement->execute();
		return $statement->fetchAll();
	}

	function datadashboard($idormawa, $periode){
		$data=array();

		//proker seluruh
		$statement=$this->db->prepare("SELECT COUNT(namaproker) as jmlproker FROM proker WHERE periode='".$periode."' AND ormawaid = ".$idormawa." LIMIT 1");
		$statement->execute();
		$proker = $statement->fetch();
		$data['proker']=$proker['jmlproker'];

		//proker evaluasi
		$statement=$this->db->prepare("SELECT COUNT(namaproker) as jmleval FROM proker WHERE periode='".$periode."' AND ormawaid = ".$idormawa." AND penilaian != 0 LIMIT 1");
		$statement->execute();
		$eval = $statement->fetch();
		$data['evaluasi']=$eval['jmleval'];

		//lpj yg sudah
		$statement=$this->db->prepare("SELECT COUNT(namaproker) as jmllpj FROM proker WHERE periode='".$periode."' AND ormawaid = ".$idormawa." AND latarbelakang <> '' LIMIT 1");
		$statement->execute();
		$lpj = $statement->fetch();
		$data['lpj']=$lpj['jmllpj'];

		//lpj yg belom
		$statement=$this->db->prepare("SELECT COUNT(namaproker) as jmllpj FROM proker WHERE periode='".$periode."' AND ormawaid = ".$idormawa." AND latarbelakang IS NULL LIMIT 1");
		$statement->execute();
		$lpj = $statement->fetch();
		$data['lpjbelom']=$lpj['jmllpj'];

		return $data;

	}
}
?>