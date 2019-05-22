<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		//melakukan koneksi database
	}
	public function cek_user() 
    {
    	if(empty($_SESSION['user']))
    	{
			redirect('login');
    	}
    }
    public function login()
    {
    	if(!empty($_POST))
    	{
    		$data = $this->db->query('SELECT * FROM user WHERE username = ?', $_POST['username'])->row_array();
    		if(!empty($data))
    		{
    			if($data['pass'] == $_POST['pass'])
    			{
    				$_SESSION['user'] = $data;;
    				redirect('dashboard');
    			}else{
    				msg('password salah','danger');
    			}
    		}else{
    			msg('username tidak diketahui','danger');
    		};
    	}
    }
}