<?php
 /**
 * 
 */
 class Model_user extends CI_Model
 {
 	
 	public function addUser($data,$table)
 	{
 		return $this->db->insert('user',$data);
 	}


 	public function getUser()
 	{
 		$username 	= set_value('username');
 		$password	= set_value('password');

 		$result = $this->db->where('username',$username)->where('password',$password)->get('user');
 		if ($result->num_rows() > 0 ) {
 			return $result->row();
 		}else{
 			return array();
 		}
 	}

 	//ambil data dari tabel admin untuk login administrator
 	public function getAdmin()
 	{
 		$username  = set_value('username');		
 		$pass 	   = set_value('pass');

 		return $this->db->where('username',$username)->where('pass',$pass)->get('admin')->row();		
 	}

 	//get profile 
 	public function getProfile($where = NULL)
 	{
 		return $this->db->get_where('admin', array('id' => $where))->row();
 	}

 	//update profile administrator
 	public function updateProfile($data,$table,$where)
 	{
 		$this->db->where($where);
 		return $this->db->update($data,$table);
 	}
 }