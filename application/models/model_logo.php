<?php

 class Model_logo extends CI_Model
 {
	 public function getLogo()
	 {
		 $result = $this->db->get('logo');
		 if($result->num_rows() > 0 ){
			 return $result->row();
		 }else{
			return array();
		 }
	 }

	 public function addLogo($data,$table)
	 {
		 return $this->db->insert($table,$data);
	 }

	 public function editLogo($table,$data)
	 {
		 return $this->db->update($data,$table);
	 }


	 public function getigFeed()
	 {
		 return $this->db->get('igfeed')->result();
	 }

	 public function editIG($where,$data,$table)
	 {
	 	$this->db->where($where);
	 	$this->db->update($table,$data);
	 }

	 public function hapusIG($where)
	 {
	 	$this->db->where($where);
	 	$this->db->delete('igfeed');

	 }
 }
 