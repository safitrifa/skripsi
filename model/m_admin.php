<?php
/**
* 
*/
class m_admin extends Model
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

	//GET SATU BUAT EDIT
	function getsatuormawa($idormawa){
		$statement=$this->db->prepare("SELECT * FROM ormawa WHERE ormawaid =".$idormawa." LIMIT 1");
		$statement->execute();
		return $statement->fetchObject();
	}

	function getsatuperiode($idperiode){
		$statement=$this->db->prepare("SELECT * FROM periode WHERE periodeid =".$idperiode." LIMIT 1");
		$statement->execute();
		return $statement->fetchObject();;
	}


	//EDIT
	function editormawa($data){
		$statement=$this->db->prepare("UPDATE ormawa SET namaOrmawa='".$data['namaOrmawa']."' WHERE ormawaid=".$data['ormawaid']);
		$statement->execute();
	}

	function editperiode($data){
		$statement=$this->db->prepare("UPDATE periode SET periode='".$data['periode']."' WHERE periodeid=".$data['periodeid']);
		$statement->execute();
	}

	//DELETE
	function deleteormawa($idormawa){
		$statement=$this->db->prepare("DELETE FROM ormawa WHERE ormawaid =".$idormawa);
		$statement->execute();
	}

	function deleteperiode($idperiode){
		$statement=$this->db->prepare("DELETE FROM periode WHERE periodeid =".$idperiode);
		$statement->execute();
	}

	//INPUT
	function createormawa($data){
		$statement=$this->db->prepare("INSERT INTO ormawa VALUES (null,'".$data['namaOrmawa']."',3)");
		$statement->execute();
	}

	function createperiode($data){
		$statement=$this->db->prepare("INSERT INTO periode VALUES (null,'".$data['periode']."')");
		$statement->execute();
	}

	function createketua($data){
		$statement=$this->db->prepare("SELECT ormawalevel FROM ormawa WHERE ormawaid=".$data['ormawaid']." LIMIT 1");
		$statement->execute();
		$idlevel=$statement->fetch();
		
		$statement=$this->db->prepare("INSERT INTO user VALUES (null,'".$data['username']."', '12345', ".$data['ormawaid'].", ".$idlevel['ormawalevel'].", ".$data['periodeid'].",2)");
		$statement->execute();
	}

	function aktifkanketua($iduser){
		$statement=$this->db->prepare("UPDATE user SET idstatus=1 WHERE userid=".$iduser);
		$statement->execute();
	}

	function nonaktifkanketua($iduser){
		$statement=$this->db->prepare("UPDATE user SET idstatus=2 WHERE userid=".$iduser);
		$statement->execute();
	}

	//===============================================================
	//EVALUASI
	// function getproker

	function getproker(){
		// $statement=$this->db->prepare("SELECT * FROM proker WHERE jenisproker = 'ekstern' AND periode='".$periode."' AND ormawaid =".$ormawaid);
		$statement=$this->db->prepare("SELECT * FROM proker p join ormawa o on p.ormawaid = o.ormawaid WHERE statusproker = 1 AND penilaianbpm=0");

		$statement->execute();
		return $statement->fetchAll();	
	}

	function gethariini(){
		$statement=$this->db->prepare("SELECT GETDATE() as today FROM proker LIMIT 1");
		$today=$statement->execute();
		return $today['today'];
	}




}
?>