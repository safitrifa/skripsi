<?php
/**
* 
*/
class m_login extends model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	function run(){
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		// $password=md5($_POST['password']);


		if ($password == '12345') {
			echo "<script>window.location='".URL."login/ubahpassword/';</script>";
		}

		$statement=$this->db->prepare("SELECT * FROM user u join ormawa o on u.ormawaid = o.ormawaid join periode p on p.periodeid = u.periodeid WHERE username='".$username."' AND password= '".$password."' LIMIT 1");
		$statement->execute();

		$data=$statement->fetch();

		$count=$statement->rowCount();
		
		
		if(empty($password) && empty($username)){
			echo "<script type='text/javascript'>alert('Username dan Password Tidak Boleh Kosong');</script>";
			echo "<script>window.location='".URL."login';</script>";
		} elseif(empty($password) && !empty($username)){
			echo "<script type='text/javascript'>alert('Password Tidak Boleh Kosong');</script>";
			echo "<script>window.location='".URL."login';</script>";
		} elseif(empty($username) && !empty($password)){
			echo "<script type='text/javascript'>alert('Username Tidak Boleh Kosong');</script>";
			echo "<script>window.location='".URL."login';</script>";
		} else{
			if($count>0){

				if($data['idstatus'] == 2){
					echo "<script type='text/javascript'>alert('Akun belum aktif, hubungi BPM');</script>";
					echo "<script>window.location='".URL."login';</script>";
				} else {
					session::init();
					session::set('userlevel',$data['level']);
					session::set('loggedIn',true);
					session::set('username',$data['username']);
					session::set('id', $data['userid']);
					session::set('ormawa', $data['namaOrmawa']);
					session::set('idormawa', $data['ormawaid']);
					session::set('periode', $data['periode']);
					session::set('periodeid', $data['periodeid']);
					session::set('ormawalevel', $data['ormawalevel']);

					if ($password == "12345") {
						echo "<script>window.location='".URL."login/ubahpassword/';</script>";
					} else {
						header('location:../dashboard');
					}
				}
	
			} else{
				echo "<script type='text/javascript'>alert('Username atau Password Salah');</script>";
				echo "<script>window.location='".URL."login';</script>";
				//header('location:../login/fail');
			}
		}
	}

	function ubah($password,$userid){
		$statement=$this->db->prepare("UPDATE user SET password='".$password."' WHERE userid=".$userid);
		$statement->execute();
	}
}

?>