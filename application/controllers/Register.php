<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_login');
		$this->load->model('modeladmin');
	}

	function index(){
		$data['title'] = "Register";
		$this->load->view('header/headlog', $data);
		$this->load->view('register');
		$this->load->view('footer/footlog');
	}

	function f_register(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$c_password = $this->input->post('konfirmasi_password');
		$npm = $this->input->post('npm');
		if($this->modeladmin->mahasiswa($npm) != null){
			if(sha1($password) == sha1($c_password)){
				
				$data = array(
					'username' => $username,
					'password' => sha1($password),
					'npm' => $npm,
					'level' => '1');		
				$this->m_login->tambah('login', $data);
				echo "<script>alert('Pendaftaran berhasil, silahkan login');window.location.href = '".base_url('Login/')."';</script>";
			} else{
				
				echo "<script>alert('Password dan konfirmasi password tidak sama. Silahkan isi kembali');window.location.href = '".base_url('Register/')."';</script>";
			}
		}else{

			echo "<script>alert('Nomor NPM tidak ditemukan');window.location.href = '".base_url('Register/')."';</script>";
		}
	}

	
}
