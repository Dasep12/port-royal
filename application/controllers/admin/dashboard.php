<?php

 /**
 * 
 */
 class Dashboard extends CI_Controller
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
		$this->load->view('template_admin/header');
 		$this->load->view('template_admin/sidebar');
 		$this->load->view('template_admin/topbar',$data);
 		$this->load->view('admin/dashboard');
 		$this->load->view('template_admin/footer');
 	}
 }