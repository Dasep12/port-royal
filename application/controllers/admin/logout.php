<?php 
/**
* 
*/
class Logout extends CI_Controller
{
	
/*	public function __construct()
	{
		# code...
	}*/

	public function index()
	{
		$this->session->sess_destroy();
		redirect('admin/auth');
	}
}