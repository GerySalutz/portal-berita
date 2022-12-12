<?php
class M_mahasiswa extends CI_Model{

	function get_all_mahasiswa(){
		$hsl=$this->db->query("SELECT id_user,nim,nama_user,email,password FROM tbl_user ORDER BY id_user DESC");
		return $hsl;
	}
	function simpan_mhs($nim,$nama,$email,$pass){
		$hsl=$this->db->query("INSERT INTO tbl_user(nim,nama_user,email,password) VALUES ('$nim','$nama','$email',md5('$pass'))");
		return $hsl;
	}

function get_pernyataan_login($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_user where id_user='$kode'");
		return $hsl;
	}

	function update_mhs($kode,$nim,$nama,$email,$pass){
		$hsl=$this->db->query("UPDATE tbl_user SET nim='$nim',nama_user='$nama',email='$email',password=md5('$pass') where id_user='$kode'");
		return $hsl;
	}
	function hapus_mahasiswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_user WHERE id_user='$kode'");
		return $hsl;
	}

	//Front-en


} 