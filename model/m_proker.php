<?php  

/**
* 
*/
class m_proker extends Model{

	function __construct()
	{
		parent::__construct();
	}

	function createproker($data){
		$statement=$this->db->prepare("INSERT INTO proker VALUES (null,'".$data['namaproker']."','".$data['jeniskegiatan']."','".$data['detailjenis']."','".$data['deskripsi']."','".$data['tanggalmulai']."','".$data['tanggalselesai']."','".$data['lingkup']."','".$data['tujuan']."',".$data['ormawa'].",'".$data['periode']."',0,0, NULL, NULL, NULL, NULL, NULL,NULL, NULL, NULL)");
		$statement->execute();
	}

	function getproker($ormawaid,$periode){
		$statement=$this->db->prepare("SELECT * FROM proker WHERE periode ='".$periode."' AND ormawaid =".$ormawaid);
		$statement->execute();
		return $statement->fetchAll();	
	}

	function getdetailproker($idproker){
		$statement=$this->db->prepare("SELECT * FROM proker WHERE prokerid =".$idproker);
		$statement->execute();
		return $statement->fetchObject();
	}

	function editproker($data){
		$statement=$this->db->prepare("UPDATE proker SET namaproker='".$data['namaproker']."', jenisproker='".$data['jeniskegiatan']."', detailjenis='".$data['detailjenis']."', deskripsi='".$data['deskripsi']."', tanggalmulai='".$data['tanggalmulai']."', tanggalselesai='".$data['tanggalselesai']."', lingkup='".$data['lingkup']."', tujuan='".$data['tujuan']."' WHERE prokerid=".$data['prokerid']);
		$statement->execute();
	}

	function delete($idproker){
		$statement=$this->db->prepare("DELETE FROM proker WHERE prokerid =".$idproker);
		$statement->execute();
	}

	//tambbahan ethod buat class
	function cekeval($idproker){
		$statement=$this->db->prepare("SELECT penilaian as nilai FROM proker WHERE prokerid=".$idproker." LIMIT 1");
		$statement->execute();
		$nilai = $statement->fetch();
		if ($nilai['nilai'] != 0) {
			return true;
		} else {
			return false;
		}
	}

	function cekterlaksana($idproker){
		$statement=$this->db->prepare("SELECT CURDATE() as hariini, tanggalselesai as selesai FROM proker WHERE prokerid=".$idproker." LIMIT 1");
		$statement->execute();
		$tanggal = $statement->fetch();
		if (new DateTime($tanggal['selesai']) <= new DateTime($tanggal['hariini'])) {
			return true;
		} else {
			return false;
		}
	}

}
?>
