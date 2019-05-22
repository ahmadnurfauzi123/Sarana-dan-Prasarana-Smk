<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('esg_model');
		$this->load->model('user_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
		$this->user_model->cek_user();
	}
	private function template($content,$data=null){ 
		$data['content'] = $this->load->view($content,$data,true);
		$this->load->view('template',$data);
	}

	public function index()
	{
		$this->template('laporan/list');
	}
	public function user()
	{
		$this->template('laporan/user');
	}
	public function suplier()
	{
		$this->template('laporan/suplier');
	}
	public function barang()
	{
		$this->template('laporan/barang');
	}
	public function barang_masuk()
	{
		$this->template('laporan/barang_masuk');
	}
	public function barang_keluar()
	{
		$this->template('laporan/barang_keluar');
	}
	public function peminjam()
	{
		$this->template('laporan/peminjam');
	}

}
