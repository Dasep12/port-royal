<?php
 /**
 * 
 */
 class Register extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['logo']			= $this->model_logo->getLogo();
		 $data['gambar']		= $this->model_logo->getigFeed();
 		$this->load->view('template/header',$data);
 		$this->load->view('template/banner');
 		$this->load->view('register');
 		$this->load->view('template/footer',$data); 	
 	}

 	public function tambahUser()
 	{
 		$this->form_validation->set_rules('nama','nama','required',[
 			'required'		=> 'nama harus di isi
 			']);
 		$this->form_validation->set_rules('username','username','required',[
 			'required'		=> 'username wajib di isi'
 			]);
 		$this->form_validation->set_rules('email','email','required',[
 			'required'		=> 'email wajib di isi'
 			]);
 		$this->form_validation->set_rules('password','password','required|matches[pass]',[
 			'required'		=> 'password wajib di isi',
 			'matches'		=> 'password tidak sama'
 			]);
 		$this->form_validation->set_rules('pass','pass','required|matches[password]',[
 			'required'		=> 're-type password wajib di isi',
 			'matches'		=> 'password tidak sama / sesuai'
 			]);

 		if ($this->form_validation->run() == FALSE) {
 			$data['logo']			= $this->model_logo->getLogo();
		 $data['gambar']		= $this->model_logo->getigFeed();
 			$this->load->view('template/header',$data);
	 		$this->load->view('template/banner');
	 		$this->load->view('register');
	 		$this->load->view('template/footer',$data);
 		}else{

 			$data = array(
 				'nama'		=> $this->input->post('nama'),
 				'username'	=> $this->input->post('username'),
 				'email'		=> $this->input->post('email'),
 				'password'	=> $this->input->post('password'),
 				'role_id'	=> 1
 			);
 			$this->model_user->addUser($data,'user');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success small">Anda Telah Terdaftar</div>');
 			redirect('auth/index');
 		}
 	}

 }