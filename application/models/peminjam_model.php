<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Peminjam_model extends CI_Model 
{
	public function masuk()
	{
		if(!empty($_POST))
		{
			$this->db->query('UPDATE barang SET jml_barang=jml_barang+? WHERE id = ?', array($_POST['jml_masuk'],$_POST['barang_id']));
		}
	}

	public function keluar()
	{
		if(!empty($_POST))
		{
			$stock = $this->db->query('SELECT jml_barang FROM barang WHERE id = ?', $_POST['barang_id'])->row_array();
			$stock = $stock['jml_barang'];
			if($stock >= $_POST['jml_keluar'])
			{
				$this->db->query('UPDATE barang SET jml_barang=jml_barang-? WHERE id = ?', array($_POST['jml_keluar'],$_POST['barang_id']));
				
			}else{
				$last_id = $this->zea->get_insert_id();

				$this->db->delete('barang_keluar','id = '.$last_id);

				
			}
		}
	}

	public function pinjam()
	{
		if(!empty($_POST))
		{
			
			 if(empty($_POST['tgl_kembali']))
			{
				$this->db->query('UPDATE barang SET jml_barang=jml_barang-? WHERE id = ?', array($_POST['jml_barang'],$_POST['barang_id']));
			}else{
				$this->db->query('UPDATE barang SET jml_barang=jml_barang+? WHERE id = ?', array($_POST['jml_barang'],$_POST['barang_id']));
			}
		}

	}

}
