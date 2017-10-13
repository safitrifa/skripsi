<?php
/**
* 
*/
class m_lpj extends Model
{
	
	function __construct()
	{
		# code...
		# 
		parent::__construct();
	}


	function getnamaproker($idproker){
		$statement=$this->db->prepare("SELECT namaproker as nama FROM proker WHERE prokerid=".$idproker." LIMIT 1");
		$statement->execute();
		$nama = $statement->fetch();
		return $nama['nama'];
	}

	function createlpj($data){
		// $statement=$this->db->prepare("UPDATE proker SET latarbelakang='".$data['latarbelakang']."', rasional='".$data['rasional']."', tujuanlpj='".$data['tujuan']."', tglpelaksanaan='".$data['tglpelaksanaan']."', tempat='".$data['tempatkegiatan']."', peserta='".$data['peserta']."', sesuai='".$data['sesuai']."', kendala='".$data['kendala']."', solusi='".$data['solusi']."' WHERE prokerid=".$data['prokerid']);
		$statement=$this->db->prepare("UPDATE proker SET latarbelakang='".$data['latarbelakang']."', rasional='".$data['rasional']."', tujuanlpj='".$data['tujuan']."', tempat='".$data['tempatkegiatan']."', peserta='".$data['peserta']."', sesuai='".$data['sesuai']."', kendala='".$data['kendala']."', solusi='".$data['solusi']."' WHERE prokerid=".$data['prokerid']);
		$statement->execute();
	}

	function getdetail($idproker){
		$statement=$this->db->prepare("SELECT * FROM proker WHERE prokerid=".$idproker." LIMIT 1");
		$statement->execute();
		return $statement->fetch();
	}


}
?>