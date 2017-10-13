<?php
/**
* 
*/
class m_kriteria extends Model
{
	
	function __construct()
	{
		# code...
		# 
		parent::__construct();
	}

	function getinsub($idkriteria){
		$statement=$this->db->prepare("SELECT * FROM kriteria WHERE kriteriaid =".$idkriteria);
		$statement->execute();
		return $statement->fetchObject();
	}

	function createkriteria($data){
		$statement=$this->db->prepare("INSERT INTO kriteria VALUES (null,'".$data['namakriteria']."', ".$data['nilaikriteria'].",0,0)");
		$statement->execute();
	}

	function getkriteria(){
		$statement=$this->db->prepare("SELECT * FROM kriteria ORDER BY kriteriaid");
		$statement->execute();
		return $statement->fetchAll();	
	}

	function createsubkriteria($data){
		$statement=$this->db->prepare("INSERT INTO subkriteria VALUES (null,'".$data['namasub']."', ".$data['utility'].", ".$data['kriteriaid'].")");
		$statement->execute();
	}

	function deletekriteria($idkriteria){
		$statement=$this->db->prepare("DELETE FROM kriteria WHERE kriteriaid =".$idkriteria);
		$statement->execute();
	}

	function deletesub($idsub){
		$statement=$this->db->prepare("DELETE FROM subkriteria WHERE subid =".$idsub);
		$statement->execute();
	}

	//untuk ambil data buat view sub kriteria di modal
	function listsubkr($idkriteria){
		$statement=$this->db->prepare("SELECT *, (k.normalisasi * s.utility) as ntemp FROM subkriteria s JOIN kriteria k on s.kriteriaid = k.kriteriaid WHERE s.kriteriaid=".$idkriteria);
		$statement->execute();
		return $statement->fetchAll();
	}

	//untuk ambil bobot 
	function getbobot(){
		$statement=$this->db->prepare("SELECT SUM(nilaikriteria) as total FROM kriteria LIMIT 1");
		$statement->execute();
		$nilai = $statement->fetch();
		return $nilai['total'];
	}

	//generate bobot & normalisasi kriteria
	function generate($data){
		$statement=$this->db->prepare("UPDATE kriteria SET bobotkriteria = ".$data['hitung']." WHERE kriteriaid=".$data['id']);
		$statement->execute();

		$statement=$this->db->prepare("UPDATE kriteria SET normalisasi = ".$data['normalisasi']." WHERE kriteriaid=".$data['id']);
		$statement->execute();
	}

	function getmaxmin(){
		$data=array();
		$statement=$this->db->prepare("SELECT * FROM kriteria");
		$statement->execute();
		$kriteria=$statement->fetchAll();

		$statement1=$this->db->prepare("SELECT * FROM subkriteria");
		$statement1->execute();
		$skriteria=$statement1->fetchAll();
		$htg1=$statement1->rowCount();
		// $htg=$statement1->rowCount();
		
		$totmax=0;
		$totmin=0;

		foreach ($kriteria as $key => $k ) {
			$a=array();

			if ($htg1 > 0) {
				foreach ($skriteria as $key => $s) {
					$statement2=$this->db->prepare("SELECT * FROM subkriteria WHERE kriteriaid=".$k['kriteriaid']);
					$statement2->execute();
					$htg=$statement2->rowCount();

					if ($htg>0) {
						if ($s['kriteriaid'] == $k['kriteriaid']) {
							$b= $k['normalisasi'] * $s['utility'];						
							array_push($a, $b);
						}
					} elseif($htg <= 0){
						// $b= $k['normalisasi'] * 0;					
						array_push($a, 0);
					}
				}
			} else {
				array_push($a, 0);
			}

			
			$totmin+=min($a);
			$totmax+=max($a);
		}

		//======
		// foreach ($kriteria as $key => $k ) {
		// 	$a=array();
		// 	foreach ($skriteria as $key => $s) {
				
		// 		if ($s['kriteriaid'] == $k['kriteriaid']) {
		// 			$b= $k['normalisasi'] * $s['utility'];
		// 			//untuk cari nili maksimal
		// 			array_push($a, $b);
		// 		}
		// 	}
		// 	$totmin+=min($a);
		// 	$totmax+=max($a);
		// }

		$data['max']= $totmax;
		$data['min']= $totmin;
		
		return $data;
	}

	//cek nilai rangenya uda ada apa belom
	function cekinputrange(){
		$statement=$this->db->prepare("SELECT * FROM rangehasil ");
		$statement->execute();
		$count = $statement->rowCount();
		if ($count>0){
			return true; // uda input
		} else{
			return false; //ada yg kurang atau belom input
		}
	}

	function rangenilai (){
		$statement=$this->db->prepare("SELECT * FROM rangehasil LIMIT 1");
		$statement->execute();
		return $statement->fetch();
	}

	function createrange($data){
		$statement=$this->db->prepare("INSERT INTO rangehasil VALUES (".$data['maxlayak'].", ".$data['pembatas'].", ".$data['mintlayak'].")");
		$statement->execute();
	}

}
?>