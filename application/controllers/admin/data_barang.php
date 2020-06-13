<?php
 /**
 * 
 */
 class Data_barang extends CI_Controller
 {
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('username') ) {
            $this->session->set_flashdata('alert','<div class="alert alert-danger"><center>Anda harus login dulu</center></div>');
            redirect('admin/auth');
        }
    }
    
 	public function index()
 	{	
        $where = $this->session->userdata('id');
        $data['profile'] = $this->model_user->getProfile($where);
 		$data['produk']	= $this->model_barang->tampil_data();
 		$this->load->view('template_admin/header');
 		$this->load->view('template_admin/sidebar');
 		$this->load->view('template_admin/topbar',$data);
 		$this->load->view('admin/data_barang',$data);
 		$this->load->view('template_admin/footer');
 	}

    public function barcode($kodenya)
    {
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        Zend_barcode::render('code128','image',array('text' => $kodenya));
    }

 	public function tambah_produk()
 	{
 		$nama_produk	= $this->input->post('nama_produk');
 		$harga			= $this->input->post('harga');
 		$ukuran			= $this->input->post('ukuran');
 		$merk			= $this->input->post('merk');
 		$stock			= $this->input->post('stock');
 		$keterangan		= $this->input->post('keterangan');
        $kodbar         = $this->input->post('kode_barang');
 		$gambar			= $_FILES['gambar'];
 		$diskon 		= $this->input->post('diskon');
 		$harga_diskon	= $harga * $diskon / 100 ;
        $harga_bayar    = $harga - $harga_diskon ;
 		if ($gambar='') {
 			$this->session->set_flashdata('pesan','<div class="alert alert-danger">Gambar Produk Harus ada</div>');
 			redirect('admin/data_barang');
 		}else{
 			$config['upload_path']		='./assets_admin/produk/';
 			$config['allowed_types']	='jpg|png|jpeg|gif| |';
            $config['height']           = 300;
            $config['width']            = 450;
 			$this->load->library('upload',$config);
 			if (!$this->upload->do_upload('gambar')) {
 				$this->session->set_flashdata('pesan','<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        File tidak di dukung untuk di upload
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div');
 				redirect('admin/data_barang');
 				die();
 			}else{
 				$gambar = $this->upload->data('file_name');
 			}

 			$data = array(
 				'nama_produk'	=> $nama_produk,
 				'harga'			=> $harga,
 				'merk'			=> $merk,
 				'ukuran'		=> $ukuran,
 				'stock'			=> $stock,
 				'keterangan'	=> $keterangan,
 				'gambar'		=> $gambar,
 				'diskon'		=> $diskon,
                'kode_barang'   => $kodbar,
 				'harga_diskon'	=> $harga_diskon,
                'harga_bayar'   => $harga_bayar
 				);
 			$this->model_barang->tambah_produk($data,'tb_produk');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success">Barang Berhasil di Posting</div>');
 				redirect('admin/data_barang');		
 		}
 	}

 	public function hapus($id)
 	{
 		$where = array('id' 	=> $id);
 		$this->model_barang->hapus_barang($where,'tb_produk');
 		$this->session->set_flashdata('pesan','<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        Produk di hapus dari data master
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div');
 				redirect('admin/data_barang');
 	}


 	public function edit($id)
 	{
        $where = $this->session->userdata('id');
        $data['profile'] = $this->model_user->getProfile($where);
 		$data['produk']		= $this->model_barang->form_edit($id);
 		$this->load->view('template_admin/header');
 		$this->load->view('template_admin/sidebar');
 		$this->load->view('template_admin/topbar',$data);
 		$this->load->view('admin/form_edit',$data);
 		$this->load->view('template_admin/footer');
 	}

 	public function update()
 	{
		$nama_produk	= $this->input->post('nama_produk');
 		$harga			= $this->input->post('harga');
 		$id 			= $this->input->post('id');
 		$ukuran			= $this->input->post('ukuran');
 		$merk			= $this->input->post('merk');
 		$stock			= $this->input->post('stock');
 		$keterangan		= $this->input->post('keterangan');
        $kodbar         = $this->input->post('kode_barang');
 		$where			= array('id' => $id);
 		$data = array(
 				'nama_produk'	=> $nama_produk,
 				'harga'			=> $harga,
 				'merk'			=> $merk,
 				'ukuran'		=> $ukuran,
 				'stock'			=> $stock,
 				'kode_barang'   => $kodbar,
                'keterangan'	=> $keterangan
 				);

 		$this->model_barang->update_produk($data,'tb_produk',$where);
 		$this->session->set_flashdata('pesan','<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                        Produk berhasil di update
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div');
 				redirect('admin/data_barang');
 	}
    

    public function tambahStock()
    {

           /* $config['base_url']     = 'http://localhost:8080/port-royal/admin/data_barang/tambahStock/';
            $config['total_rows']   = $this->model_barang->countSepatu();
            $config['per_page']     = 3;

            $data['start']    = $this->uri->segment(4);

            $this->pagination->initialize($config); */

           // $data['produk']  =  $this->model_barang->getSepatu($config['per_page'],$data['start']);
            $where = $this->session->userdata('id');
        $data['profile'] = $this->model_user->getProfile($where);
            $data['produk'] = $this->model_barang->tampil_data();
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('template_admin/topbar',$data);
            $this->load->view('admin/tambah_stock',$data);
            $this->load->view('template_admin/footer');
    }

    public function addStock()
    {
        $this->form_validation->set_rules('stock','stock','required',[
            'required'  => 'jumlah stock harus di isi ']);
        $this->form_validation->set_rules('kode_barang','kode_barang','required',[
            'required'  => 'kode barang  harus di isi ']);
        
        if ($this->form_validation->run() == FALSE) {
            $data['produk']  =  $this->model_barang->tampil_data();
            $where = $this->session->userdata('id');
        $data['profile'] = $this->model_user->getProfile($where);
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('template_admin/topbar',$data);
            $this->load->view('admin/tambah_stock',$data);
            $this->load->view('template_admin/footer');
        }else{
            $data = array(
                'stock'         => $this->input->post('stock'),
                'kode_barang'   => $this->input->post('kode_barang')
            );
            $this->model_barang->tambah_stock($data,'stock');
            $this->session->set_flashdata('pesan','<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                        <span class="badge badge-pill badge-light">Success</span>
                                        Stock Di tambahkan
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>');
            redirect('admin/data_barang/tambahStock');
        }
        
    }
 }