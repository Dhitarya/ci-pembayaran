<?php

Class Home extends CI_Controller {
	
	public function index()	{
		$this->load->view('home');
	}
	public function carikerja() {
		$this->load->view('carikerja');
	}

	public function login(){
		$this->load->view('v_login');
	}
	function backtohome() {
		redirect(base_url('main/index'));
	}
	public function daftarperusahaan() {
		$this->load->view('daftarperusahaan');
	}
	function daftarsimpan(){
		$this->load->model('model_bkk');
		$this->model_bkk->daftarsimpan();
		redirect('home/admincarikerja');
	} 
	function admincarikerja(){
		$this->load->view('v_tabelcarikerja');
	}
	function tampilcarikerja(){
		$this->model_bkk->tampilcarikerja();
		redirect('');
	}
}