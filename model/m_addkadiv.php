<?php
/**
* 
*/
class m_addkadiv extends Model
{
	
	function __construct()
	{
		# code...
		# 
		parent::__construct();
	}

	function getkadiv($idormawa,$periodeid){
		$statement=$this->db->prepare("SELECT * FROM user WHERE level=2 AND ormawaid=".$idormawa." AND periodeid=".$periodeid);
		$statement->execute();
		return $statement->fetchAll();
	}

	function createuser($data){
		$statement=$this->db->prepare("INSERT INTO user VALUES (null,'".$data['username']."', '".$data['password']."', ".$data['ormawaid'].", 2, ".$data['periodeid'].",1)");
		$statement->execute();
	}

	function deleteuser($iduser){
		$statement=$this->db->prepare("DELETE FROM user WHERE userid=".$iduser);
		$statement->execute();
	}

}
?>