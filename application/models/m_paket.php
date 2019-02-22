<?php
class m_paket extends CI_Model{
	
	function __construct()
	{
		$this->load->database();
	}

	// public function cek_login($karyawan,$nama)
	// {
	// 	$this->db->where('nip',$nip);
	// 	$this->db->where('nama',$nama);
	// 	return $this->db->get('data');
	// }
	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
		
	}

	function tampil_data(){
		$this->db->from('paket');
		$query = $this->db->get();
		return $query->result();
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}




}

 ?>