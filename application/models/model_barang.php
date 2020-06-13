<?php
 /**
 * 
 */
 class Model_barang extends CI_Model
 {
 	
 	public function tampil_data()
 	{
 		return $this->db->order_by('id')->get('tb_produk')->result();
 	}

 	
 	public function getSepatu($limit,$start)
 	{
 		return $this->db->get('tb_produk',$limit,$start)->result();
 	}


 	public function countSepatu()
 	{
 		return $this->db->get('tb_produk')->num_rows();
 	}

 	public function tambah_produk($data,$table)
 	{
 		return $this->db->insert($table,$data);
 	}

 	public function hapus_barang($where,$table)
 	{
 		$this->db->where($where);
 		$this->db->delete($table);
 	}

 	public function form_edit($id)
 	{
 		return $this->db->where('id',$id)->limit(1)->get('tb_produk')->result();
 	}


 	public function update_produk($table,$data,$where)
 	{
 		$this->db->where($where);
 		$this->db->update($data,$table);
 	}



 	public function find($id)
 	{
 		$query = $this->db->where('id',$id)->limit(1)->get('tb_produk');
 		if ($query->num_rows() > 0) {
 			return $query->row();
 		}else{
 			return array();
 		}
 	}


 	public function detail($id = NULL)
 	{
 		$query = $this->db->get_where('tb_produk', array('id' => $id))->row();
 		return $query;
 	}

 	public function tambah_stock($table,$data)
 	{
 		return $this->db->insert($data,$table);
 	}
 }