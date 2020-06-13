<?php

 /**
 * 
 */
 class Auth extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();

 		if(!empty($this->session->userdata('username'))){
 			redirect('admin/dashboard');
 		}
 	}

 	public function index()
 	{
 		$this->form_validation->set_rules('username','username','required',[
 			'required'	=> 'usernam harus di isi']);
 		$this->form_validation->set_rules('pass','pass','required',[
 			'required'	=> 'password harus di isi ']);
 			if ($this->form_validation->run()==FALSE) {
		 		$this->load->view('admin/auth');
 			}else{
 				$auth = $this->model_user->getAdmin();
 				if ($auth == FALSE) {
 					$this->session->set_flashdata('alert','<div class="alert alert-danger mt-2 mb-0"><center>Username dan Password tidak ada</center></div>');
 					$this->load->view('admin/auth');
 				}else{
 					$this->session->set_userdata('username',$auth->username);
 					$this->session->set_userdata('role_vote',$auth->role_vote);
 					$this->session->set_userdata('poto',$auth->poto);
 					$this->session->set_userdata('id',$auth->id);
 					
 					switch ($auth->role_vote) {
 						case '1':
 							redirect('admin/dashboard');
 							break;
 						
 						default:
 							# code...
 							break;
 					}
 				}
 			}

 	}
 }