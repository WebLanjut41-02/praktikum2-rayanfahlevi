<?php 
	class prak extends CI_Controller{
		
		function __construct(){
			parent::__construct();		
			$this->load->model('m_paket');
			$this->load->helper('url');
	
		}

		public function index(){
			$this->load->view('log/v_login');
		}

		public function aksi_login(){
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama');
			$where = array(
			'nip' => $nip,
			'nama' => $nama
			);
			$cek = $this->m_paket->cek_login("karyawan",$where)->num_rows();
			// $data = $this->m_admin->cek_login($username,$password)->row();
			
			if($cek > 0){
 
			$data_session = array(
				'nama' => $nama,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
				
				redirect('prak/utama');
			}else{
				echo "<script>alert('username atau password yang anda masukan salah');history.go(-1);</script>";
				
			}
		}



		// public function proseslog(){
		// 	$username = $this->input->post('username');
		//  	$password = $this->input->post('password');
			
		// 	if ($username == "admin" && $password == "123") {
		// 	redirect('prak/utama');
				
		// 	}
		// 	else{
		// 		echo "<script>alert('username atau password yang anda masukan salah');history.go(-1);</script>";
				
		// 	}

		// }

		public function utama(){
			$this->load->view('v_halutama');
		}

		public function inputpeng()
		{
			$this->load->view('input/v_penghuni');
		}
		
		public function inputpaket()
		{
			$this->load->view('input/v_paket');
		}
		
	
		public function prosesdata(){
			$ktp = $this->input->post('ktp');
			$nama = $this->input->post('nama');
			$unit = $this->input->post('unit');
	 
			$data = array(
				'ktp' => $ktp,
				'nama' => $nama,
				'unit' => $unit
				);
			$this->m_paket->input_data($data,'penghuni');
			redirect('prak/index');
		}

		public function prosespaket(){
			$datang = $this->input->post('tgl_datang');
			$sasaran = $this->input->post('sasaran');
			$penerima = $this->input->post('penerima');
			$isi = $this->input->post('isi');
			$ambil = $this->input->post('tgl_ambil');
	 
			$data = array(
				'tgl_datang' => $datang,
				'sasaran' => $sasaran,
				'penerima' => $penerima,
				'isi' => $isi,
				'tgl_ambil' => $ambil
				);
			$this->m_paket->input_data($data,'paket');
			redirect('prak/index');
		}

		public function listpaket(){

			$data['value'] = $this->m_paket->tampil_data();
			$this->load->view('v_listpaket', $data);
		
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('prak/index','refresh');
		}


	}
 ?>
