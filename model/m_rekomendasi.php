<?php
/**
* 
*/
class m_rekomendasi extends Model
{
	
	function __construct()
	{
		# code...
		# 
		parent::__construct();
	}

	function getperiodesebelum($periodeid){
		$statement=$this->db->prepare("SELECT periode as per FROM periode WHERE periodeid=".$periodeid." LIMIT 1");
		$statement->execute();
		$periode = $statement->fetch();
		return $periode['per'];

	}

	function cek($periode, $periodeid, $ormawaid){
		$data=array();

		//cek kalo uda ada yg di eval
		$statement=$this->db->prepare("SELECT SUM(penilaian) as nilai FROM proker WHERE periode='".$periode."' AND ormawaid=".$ormawaid." LIMIT 1");
		$statement->execute(); 
		$nilai = $statement->fetch();
		$data['adaproker'] = $nilai['nilai'];

		//cek kalo periode sebelumnya itu ada
		$statement=$this->db->prepare("SELECT periodeid as per FROM periode WHERE periodeid=".$periodeid." LIMIT 1");
		$statement->execute();
		$per = $statement->rowCount();
		$data['periode']=$per;

		return $data;
	}

	function getkriteriarekom(){
		//$statement=$this->db->prepare("SELECT * FROM kriteria k join user u on k.userid = u.userid WHERE k.userid=".$id);
		// ini par $id

		$statement=$this->db->prepare("SELECT * FROM kriteria");
		$statement->execute();
		return $statement->fetchAll();	
	}

	function listsubkr($idkriteria){
		$statement=$this->db->prepare("SELECT *, (k.normalisasi * s.utility) as ntemp FROM subkriteria s JOIN kriteria k on s.kriteriaid = k.kriteriaid WHERE s.kriteriaid=".$idkriteria);
		$statement->execute();
		return $statement->fetchAll();
	}

	function getnilai(){
		$statement=$this->db->prepare("SELECT p.prokerid as oprokerid, pb.prokerid as bprokerid, p.kriteriaid as oidkriteria, pb.kriteriaid as bidkriteria, p.utility as outility, pb.utility as butility, p.ntemp as ontemp, pb.ntemp as bntemp  FROM penilaian p join penilainbpm pb on p.prokerid = pb.prokerid");
		$statement->execute();
		return $statement->fetchAll();
	}

	function gethasil($ormawaid,$periode){
		$statement=$this->db->prepare("SELECT * FROM proker WHERE penilaian != 0 AND jenisproker = 'ekstern' AND periode = '".$periode."' AND ormawaid =".$ormawaid);
		$statement->execute();
		return $statement->fetchAll();
	}

	function rangenilai (){
		$statement=$this->db->prepare("SELECT * FROM rangehasil LIMIT 1");
		$statement->execute();
		return $statement->fetch();
	}
}