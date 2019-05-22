<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barangmodel extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		//melakukan koneksi database
		$this->load->database();
	}
	public function cek_user($data) 
    {
        $query = $this->db->get_where('user', $data);
        return $query;
    }
}
?>