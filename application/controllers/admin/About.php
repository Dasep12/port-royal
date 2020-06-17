<?php



 /**
  * 
  */
 class About extends CI_Controller
 {
 	public function index()
 	{
 		$where = $this->session->userdata('id');
 		$data['profile'] = $this->model_user->getProfile($where);
 		$data['tentang'] = $this->db->get("about")->row();
		$this->load->view('template_admin/header');
 		$this->load->view('template_admin/sidebar');
 		$this->load->view('template_admin/topbar',$data);
 		$this->load->view('admin/about');
 		$this->load->view('template_admin/footer');
 	}


 	public function update()
 	{
 		$data = array('about' => $this->input->post("tentang"));

 		$where = array('id' => 1 );

 		$this->db->where($where);
 		$this->db->update("about",$data);

 		redirect("admin/About");
 	}

 }