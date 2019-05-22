<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
	public function get_barang($id){
		$data = array();
		if(!empty($id)){
			$data = $this->db->query('SELECT * FROM barang WHERE id = ? LIMIT 1', $id)->row_array();
		}
		return $data;
	}
	public function transaksi(){
		if(!empty($_POST['form_1']))
		{
			$stok = $this->db->query('SELECT stok FROM barang WHERE id = ?',$_POST['barang_id'])->row_array();
			$jumlah = @intval($_POST['jumlah']);
			$stok = @intval($stok['stok'])-$jumlah;
			$this->db->query('UPDATE barang SET stok = ? WHERE id = ?', array($stok,$_POST['barang_id']));
		}
	}
}