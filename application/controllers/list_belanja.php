<?php
 /**
 * 
 */
 class List_belanja extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['logo']			= $this->model_logo->getLogo();
		 $data['gambar']		= $this->model_logo->getigFeed();
 		$this->load->view('template/header',$data);
 		$this->load->view('template/banner');
 		$this->load->view('list_belanja');
 		$this->load->view('template/footer',$data);
 	}
 }