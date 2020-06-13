<?php
 /**
 * 

 */
 class Dashboard extends CI_Controller
 {

 	public function index()
 	{

 		//config 
 		$config['base_url'] 	= 'http://localhost/port-royal/dashboard/index/';
 		$config['total_rows']	= $this->model_barang->countSepatu();

 		//limit yang ditampilkan per halaman
 		$config['per_page']		= 8;

 		//mengambil dari id berapa data yang di tampilkan 
 		$data['start']			= $this->uri->segment(3);


 		//initialize
 		$this->pagination->initialize($config);

		 $data['sepatu']	 	= $this->model_barang->getSepatu($config['per_page'],$data['start']);

		 //logo header dan footer
		 $data['logo']			= $this->model_logo->getLogo();
		 $data['gambar']		= $this->model_logo->getigFeed();
 		$this->load->view('template/header',$data);
 		$this->load->view('template/banner');
 		$this->load->view('dashboard',$data);
 		$this->load->view('template/footer',$data);
 	}

 	public function detail_produk($id)
 	{
 		$this->load->model('model_barang');
 		$detail	= $this->model_barang->detail($id);
 		$data['detail'] = $detail;
		$data['logo']			= $this->model_logo->getLogo();
		 $data['gambar']		= $this->model_logo->getigFeed();
		$this->load->view('template/header',$data);
 		$this->load->view('template/banner');
 		$this->load->view('detail_produk',$data);
 		$this->load->view('template/footer',$data);
 	

 	}


 	public function add_to_cart($id)
 	{
 		$sepatu = $this->model_barang->find($id);

 		$data  = array(
 			'id'		=> $sepatu->id,
 			'price'		=> $sepatu->harga_bayar,
 			'qty'		=> 1,
 			'name'		=> $sepatu->merk
 		);
		$this->cart->insert($data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success"><center>Produk di masukan ke keranjang</center></div>');
		redirect('dashboard');
 	}


 	public function checkout()
 	{

 		if (empty($this->session->userdata('username')) ) {
 			$this->session->set_flashdata('pesan','<div class="middle col-md-8 alert alert-danger mt-0" style="margin-left:90px;">Anda Harus Login Dulu</div>');
 			redirect('auth/index');
 		}else{
 			$data['logo']		= $this->model_logo->getLogo();
		 	$data['gambar']		= $this->model_logo->getigFeed();
	 		$this->load->view('template/header',$data);
	 		$this->load->view('template/banner');
	 		$this->load->view('form_checkout');
	 		$this->load->view('template/footer',$data);
 		}

 	}


 	public function bayar()
 	{
 		$proces = $this->model_invoice->index();
 		
 		if ($proces) {
 			$data['logo']			= $this->model_logo->getLogo();
			$data['gambar']		= $this->model_logo->getigFeed();
 			$this->cart->destroy();
			$this->load->view('template/header',$data);
			$this->load->view('template/banner');
			$this->load->view('notice');
			$this->load->view('template/footer',$data);
 		}else{
 			echo "<h4>Pesanan gagal di proses</h4>";
 		}
 	}

 	public function hapus_keranjang()
 	{
 		$this->cart->destroy();
 		redirect('dashboard');
 	}
 }