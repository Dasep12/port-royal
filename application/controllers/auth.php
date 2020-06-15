<?php
 /**
 * 
 */
 class Auth extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['logo']			= $this->model_logo->getLogo();
		 $data['gambar']		= $this->model_logo->getigFeed();
 		$this->load->view('template/header',$data);
 		$this->load->view('template/banner');
 		$this->load->view('login');
 		$this->load->view('template/footer',$data); 	
 	}


 	public function login()
 	{

 		$this->form_validation->set_rules('username','username','required',[
 			'required'		=> 'username harus di isi'
 			]);
 		$this->form_validation->set_rules('password','password','required',[
 			'required'		=> 'password masih kosong'
 			]);

 		if ($this->form_validation->run() == FALSE ){
 			$data['logo']			= $this->model_logo->getLogo();
		 	$data['gambar']		= $this->model_logo->getigFeed();
 			$this->load->view('template/header',$data);
	 		$this->load->view('template/banner');
	 		$this->load->view('login');
	 		$this->load->view('template/footer',$data);
 		}else{
 			$auth = $this->model_user->getUser();
 				if($auth == FALSE){
 					$this->session->set_flashdata('pesan','<div class="middle col-md-8 alert alert-danger mt-0" style="margin-left:90px;">Username dan Password Tidak Ada</div>');
 					redirect('auth/index');
 				}else{
 					$this->session->set_userdata('username',$auth->username);
 					$this->session->set_userdata('role_id',$auth->role_id);
 					switch ($auth->role_id) {
 						case '2':
 							redirect('dashboard/checkout');
 							break;
 						
 						default:
 							# code...
 							break;
 					}
 				}
 		}
 	}

 }