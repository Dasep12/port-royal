<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data['logo'] 	= $this->model_logo->getLogo();
		$data['gambar']	= $this->model_logo->getigFeed();
		$this->load->view('template/header',$data);
 		$this->load->view('template/banner');
 		$this->load->view('contact');
 		$this->load->view('template/footer',$data);
	}

	public function AddContact()
	{
		$this->form_validation->set_rules('name','name','required',[
			'required'	=> 'Nama tidak boleh kosong']);
		$this->form_validation->set_rules('email','email','required',[
			'required'	=> 'Email tidak boleh kosong']);
		$this->form_validation->set_rules('subject','name','required',[
			'required'	=> 'Subject tidak boleh kosong']);
		$this->form_validation->set_rules('pesan','pesan','required',[
			'required'	=> 'Pesan anda tidak boleh kosong']);
		if ($this->form_validation->run() == FALSE) {

				$data['logo'] 	= $this->model_logo->getLogo();
				$data['gambar']	= $this->model_logo->getigFeed();
				$this->load->view('template/header',$data);
		 		$this->load->view('template/banner');
		 		$this->load->view('contact');
		 		$this->load->view('template/footer',$data);
		}else{
			$data = array(
				'name'			=> $this->input->post('name'),
				'email'			=> $this->input->post('email'),
				'subject'		=> $this->input->post('subject'),
				'pesan'			=> $this->input->post('pesan'),
				'tanggal_masuk'	=> date('Y-m-d H:i:s')
			);

		$this->db->insert('pesan_masuk',$data);
		$this->session->set_flashdata('pesan','<div class="col-md-12 alert alert-success"><center>Pesan Anda Terkirim</center></div>');
		redirect('contact/index');
		}	
	}
}
