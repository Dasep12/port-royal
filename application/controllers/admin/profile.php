<?php

 /**
 * 
 */
 class Profile extends CI_Controller
 {
 	
/* 	public function __construct()
 	{

 	}*/

 	public function index()
 	{
 		$where = $this->session->userdata('id');
 		$data['profile'] = $this->model_user->getProfile($where);
 		$this->load->view('template_admin/header');
 		$this->load->view('template_admin/sidebar');
 		$this->load->view('template_admin/topbar',$data);
 		$this->load->view('admin/profile',$data);
 		$this->load->view('template_admin/footer');
 	}

 	public function update()
 	{
 		if (empty($_FILES['poto']['name']) ) {
 			
 			$data = array(
 				'nama'		=> $this->input->post('nama'),
 				'username'	=> $this->input->post('username'),
 				'role_vote'	=> $this->input->post('role_vote')
 			);

 			$where = array('id' => $this->input->post('id') );

 			$this->model_user->updateProfile('admin',$data,$where);
 			$this->session->set_flashdata('alert','Berhasil');
 			redirect('admin/profile/index');
 		}elseif(!empty($_FILES['poto']['name'])){
 			$config['allowed_types']	= 'jpg|png|jpeg|png';
 			$config['upload_path']		= './assets_admin/images/profile/';
 			$config['max_size']			= '2048';
 			$config['height']			= '480';
 			$config['width']			= '1024';
 			$this->load->library('upload',$config);
 				if(!$this->upload->do_upload('poto')){
 					$this->session->set_flashdata('alert','Gambar tidak di ijinkan');
 					redirect('admin/profile/index');
 					die();
 				}else{
 					$gambar = $this->upload->data('file_name');
 				}

 			$where = array('id' => $this->input->post('id') );
 			$data = array(
 				'nama'		=> $this->input->post('nama'),
 				'username'	=> $this->input->post('username'),
 				'role_vote'	=> $this->input->post('role_vote'),
 				'poto'		=> $gambar
 			);
 			$this->model_user->updateProfile('admin',$data,$where);
 			$this->session->set_flashdata('alert','Berhasil');
 			redirect('admin/profile/index');	
  		}
 	}

 }