<?php
	/**
	* 
	*/
	class proker extends controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			session::init();
		}

		function index(){
			$ses=session::get('userlevel');
			$this->view->dataproker=$this->model->getproker(session::get('idormawa'), session::get('periode'));
			if ($ses == 1) {
				$this->view->renderhomepage('ketua/prokerketua');
			} else if ($ses == 2){
				$this->view->renderhomepage('kadiv/prokerkadiv');
			}
		}
		
		//input proker
		function createproker(){

		//ketika tanggal mulai lebih lama dr tgl selesai --> salah brrti
		//ex: mulai= 12 april, selesai=11 april
		if (new DateTime($_POST['tanggalmulai']) > new DateTime($_POST['tanggalselesai'])) { 
			echo "<script type='text/javascript'>alert('Tanggal selesai tidak boleh lebih awal dari tanggal mulai');</script>";
			echo "<script>window.location='".URL."proker';</script>";
			// echo "<script> event.preventDefault()</script>";
		} else {
		
			$data=array();
			$data['namaproker']=$_POST['namaproker'];
			$data['jeniskegiatan']=$_POST['jeniskegiatan'];
			$data['detailjenis']=$_POST['detailjenis'];
			$data['deskripsi']=$_POST['deskripsi'];
			$data['tanggalmulai']=date('Y-m-d', strtotime($_POST['tanggalmulai']));
			$data['tanggalselesai']=date('Y-m-d', strtotime($_POST['tanggalselesai']));
			$data['lingkup']=$_POST['lingkup'];
			$data['tujuan']=$_POST['tujuan'];
			$data['periode']=session::get('periode');
			$data['ormawa']=session::get('idormawa');

			// echo $_POST['tanggalmulai'];
			$this->model->createproker($data);
			header('location:../proker');
			}
		}

		function getdet($idproker){
			$detail=$this->model->getdetailproker($idproker);
			echo json_encode($detail);
		}

		//edit proker
		function editproker(){
		
			if (new DateTime($_POST['tanggalmulai1']) > new DateTime($_POST['tanggalselesai1'])) {
				echo "<script type='text/javascript'>alert('Tanggal selesai tidak boleh lebih awal dari tanggal selesai');</script>";
				echo "<script>window.location='".URL."proker';</script>";
			} else{
				$data=array();
				$data['prokerid']=$_POST['prokerid1'];
				$data['namaproker']=$_POST['namaproker1'];
				$data['jeniskegiatan']=$_POST['jeniskegiatan1'];
				$data['detailjenis']=$_POST['detailjenis1'];
				$data['deskripsi']=$_POST['deskripsi1'];
				$data['tanggalmulai']=date('Y-m-d', strtotime($_POST['tanggalmulai1']));
				$data['tanggalselesai']=date('Y-m-d', strtotime($_POST['tanggalselesai1']));
				$data['lingkup']=$_POST['lingkup1'];
				$data['tujuan']=$_POST['tujuan1'];

				$this->model->editproker($data);
				header('location:../proker');
			}		
		}

		//DELETE proker
		function delete($idproker){
			$cekeval = $this->model->cekeval($idproker);
			$cekterlaksana = $this->model->cekterlaksana($idproker);
			if ($cekeval == true ) {
				echo "<script type='text/javascript'>alert('program kerja sudah di evaluasi, tidak bisa di hapus');</script>";
				echo "<script>window.location='".URL."proker';</script>";
			} elseif ($cekterlaksana == true) {
				echo "<script type='text/javascript'>alert('program kerja sudah terlaksana, tidak bisa di hapus');</script>";
				echo "<script>window.location='".URL."proker';</script>";
			} else {
				$this->model->delete($idproker);
				header('location:..');				
			}
		}
	}
?>