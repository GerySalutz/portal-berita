<?php 
class pendaftaran extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_mahasiswa');
		
       
	}

	function index(){
		
		$this->load->view('v_pendaftaran');
	}

	function simpan_mhs(){
		
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama',TRUE);
		$email=$this->input->post('email');
		$pass=$this->input->post('password');
		$this->m_mahasiswa->simpan_mhs($nim,$nama,$email,$pass);
		echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Anda Berhasil Terdaftar</div>");
		redirect('user/user');
	}


	
}