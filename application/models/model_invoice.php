<?php

 /**
 * 
 */
 class Model_invoice extends CI_Model
 {
 	
 	public function index()
 	{
 		date_default_timezone_set('Asia/Jakarta');

 		$this->form_validation->set_rules('first_name','first_name','required',[
 			'required'	=> 'First Name harus di isi'
 			]);
 		$this->form_validation->set_rules('last_name','last_name','required',[
 			'required'	=> 'Last Name harus di isi
 			']);
 		$this->form_validation->set_rules('no_telp','last_name','required',[
 			'required'	=> 'No.Telepon harus di isi
 			']);
 		$this->form_validation->set_rules('email','last_name','required',[
 			'required'	=> 'Email harus di isi
 			']);
 		$this->form_validation->set_rules('alamat','last_name','required',[
 			'required'	=> 'Alamat lengkap harus di isi
 			']);
 		$this->form_validation->set_rules('kota','last_name','required',[
 			'required'	=> 'Kabupaten atau kota  harus di isi
 			']);
 		$this->form_validation->set_rules('kode_pos','last_name','required',[
 			'required'	=> 'Kode POS  harus di isi
 			']);


 		if ($this->form_validation->run() == FALSE) {
 			$data['logo']			= $this->model_logo->getLogo();
		$data['gambar']		= $this->model_logo->getigFeed();
 			$this->load->view('template/header',$data);
	 		$this->load->view('template/banner');
	 		$this->load->view('form_checkout');
	 		$this->load->view('template/footer',$data);
 		}else{
		$first_name		= $this->input->post('first_name');
 		$last_name		= $this->input->post('last_name');
 		$no_telp		= $this->input->post('no_telp');
 		$email			= $this->input->post('email');
 		$alamat			= $this->input->post('alamat');
 		$kota			= $this->input->post('kota');
 		$kode_pos		= $this->input->post('kode_pos');
 		$keterangan		= $this->input->post('keterangan');
 		$tgl_pesan		= date('Y-m-d h:i:s');
 		$batas_bayar	= date('Y-m-d h:i:s' ,mktime(date('h'),date('i'),date('s'),date('m'),date('d')+1,date('y')));

 		$data = array(
 			'first_name'	=> $first_name,
 			'last_name'		=> $last_name,
 			'no_telp'		=> $no_telp,
 			'email'			=> $email,
 			'alamat'		=> $alamat,
 			'kota'			=> $kota,
 			'kode_pos'		=> $kode_pos,
 			'keterangan'	=> $keterangan,
 			'tgl_pesan'		=> $tgl_pesan,
 			'batas_bayar'	=> $batas_bayar
 			);

 		$this->db->insert('tb_invoice',$data);
 		$id_invoice		= $this->db->insert_id();

 		foreach($this->cart->contents()  as $item) {
 			$data 		= array(
 				'id_invoice'	=> $id_invoice,
 				'id_brg'		=> $item['id'],
 				'nama_produk'	=> $item['name'],
 				'jumlah'		=> $item['qty'],
 				'harga'			=> $item['price']
 			);
 				$this->db->insert('tb_pesanan',$data);
 			}
 		 		return true;
 		}

 	}

 	public function getPesanan()
 	{
 		$result =  $this->db->get('tb_invoice');
 		if($result->num_rows() > 0){
 			return $result->result();
 		}else{
 			return array();
 		}
 	}

 	public function getProduk($id)
 	{
 		$result = $this->db->where('id_invoice', $id)->get('tb_pesanan');
 		if ($result->num_rows() > 0 ) {
 			return $result->result();
 		}else{
 			return array();
 		}
 	}
 }