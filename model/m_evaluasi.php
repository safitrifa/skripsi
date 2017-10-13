<?php
/**
* 
*/
class m_evaluasi extends Model{
	
	function __construct(){
		parent::__construct();
	}

	function getkriteria(){
		$statement=$this->db->prepare("SELECT * FROM kriteria");
		$statement->execute();
		return $statement->fetchAll();	
	}

	function getnilai(){
		$statement=$this->db->prepare("SELECT p.prokerid as oprokerid, pb.prokerid as bprokerid, p.kriteriaid as oidkriteria, pb.kriteriaid as bidkriteria, p.utility as outility, pb.utility as butility, p.ntemp as ontemp, pb.ntemp as bntemp  FROM penilaian p join penilainbpm pb on p.prokerid = pb.prokerid");
		$statement->execute();
		return $statement->fetchAll();
	}

	function listsub(){
		$statement=$this->db->prepare("SELECT * FROM subkriteria");
		$statement->execute();
		return $statement->fetchAll();
	}

	function getnamaproker($idproker){
		$statement=$this->db->prepare("SELECT namaproker as nama FROM proker WHERE prokerid=".$idproker." LIMIT 1");
		$statement->execute();
		$nama = $statement->fetch();
		return $nama['nama'];
	}

	function hitung($idproker, $idkriteria, $utility, $nilaitemp){
		$statement=$this->db->prepare("INSERT INTO penilaian VALUES (".$idproker.", ".$idkriteria.", ".$utility.", ".$nilaitemp.")");
		$statement->execute();
	}

	function updatenilai($nilai, $idproker){
		$statement=$this->db->prepare("UPDATE proker SET penilaian=".$nilai." WHERE prokerid=".$idproker);
		$statement->execute();
	}

	function gethasil($idormawa,$periode){
		$statement=$this->db->prepare("SELECT * FROM proker WHERE statusproker = 1 AND periode = '".$periode."' AND ormawaid =".$idormawa." ORDER BY penilaian desc");
		$statement->execute();
		return $statement->fetchAll();
	}

	function cek($idormawa, $periode){
		$statement=$this->db->prepare("SELECT SUM(penilaian) as total FROM proker WHERE ormawaid=".$idormawa." AND periode='".$periode."' LIMIT 1");
		$statement->execute();
		$hasil = $statement->fetch();
		return $hasil['total'];
	}

	function updatenilaibpm($nilai, $idproker){
		$statement=$this->db->prepare("UPDATE proker SET penilaianbpm=".$nilai." WHERE prokerid=".$idproker);
		$statement->execute();
	}

	function hitungbpm($idproker, $idkriteria, $utility, $nilaitemp){
		$statement=$this->db->prepare("INSERT INTO penilainbpm VALUES (".$idproker.", ".$idkriteria.", ".$utility.", ".$nilaitemp.")");
		$statement->execute();
	}

	//halaman menu evaluasi
	function getproker($idormawa,$periode){
		$statement=$this->db->prepare("SELECT * FROM proker WHERE statusproker = 1 AND periode='".$periode."' AND ormawaid =".$idormawa);
		$statement->execute();
		return $statement->fetchAll();	
	}

	function gethariini(){
		$statement=$this->db->prepare("SELECT GETDATE() as today FROM proker LIMIT 1");
		$today=$statement->execute();
		return $today['today'];
	}


	function cekevaluasi(){
		$data=array();

		//cek uda input range
		$statement=$this->db->prepare("SELECT * FROM rangehasil");
		$statement->execute();
		$count1 = $statement->rowCount();
		if ($count1>0){
			$data['adarange']=true; // uda input
		} else{
			$data['adarange'] =false; //ada yg kurang atau belom input
		}

		//cek uda ada kriteria
		$statement=$this->db->prepare("SELECT * FROM kriteria");
		$statement->execute();
		$count = $statement->rowCount();
		if ($count>0){
			$data['adakriteria']=true; // uda input
		} else{
			$data['adakriteria'] =false; //ada yg kurang atau belom input
		}

		return $data;
	}

	// function cekevaluasibpm($idproker){
	// 	$data=array();

	// 	$statement=$this->db->prepare("SELECT periode, ormawaid FROM proker WHERE prokerid=".$idproker);
	// 	$statement->execute();
	// 	$hasil=  $statement->fetch();

	// 	// //cek uda input range
	// 	// $statement=$this->db->prepare("SELECT * FROM rangehasil WHERE ormawaid=".$hasil['ormawaid']." AND periode='".$hasil['periode']."'");
	// 	// $statement->execute();
	// 	// $count1 = $statement->rowCount();
	// 	// if ($count1>0){
	// 	// 	$data['adarange']=true; // uda input
	// 	// } else{
	// 	// 	$data['adarange'] =false; //ada yg kurang atau belom input
	// 	// }

	// 	//cek uda ada kriteria
	// 	$statement=$this->db->prepare("SELECT * FROM kriteria k join user u on k.userid = u.userid join periode p on u.periodeid = p.periodeid WHERE p.periode='".$hasil['periode']."' AND u.ormawaid=".$hasil['ormawaid']);
	// 	$statement->execute();
	// 	$count = $statement->rowCount();
	// 	if ($count>0){
	// 		$data['adakriteria']=true; // uda input
	// 	} else{
	// 		$data['adakriteria'] =false; //ada yg kurang atau belom input
	// 	}

	// 	return $data;
	// }

	function rangenilai (){
		$statement=$this->db->prepare("SELECT * FROM rangehasil LIMIT 1");
		$statement->execute();
		return $statement->fetch();
	}
}
?>