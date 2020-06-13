<?php

 class Setting extends CI_Controller
 {
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('username') ) {
            $this->session->set_flashdata('alert','<div class="alert alert-danger"><center>Anda harus login dulu</center></div>');
            redirect('admin/auth');
        }
    }
    
		public function viewLogo()
		{
            $data['logo']   = $this->model_logo->getLogo();
            $where = $this->session->userdata('id');
        $data['profile'] = $this->model_user->getProfile($where);
			$this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('template_admin/topbar',$data);
            $this->load->view('admin/viewLogo',$data);
            $this->load->view('template_admin/footer');
        }
        
        public function updateLogo()
        {
            $logo       = $_FILES['logo'];
            $id         = $this->input->post('id');
            
            if($logo=''){}else{
                $config['upload_path']      ='./assets/img/logo/';
                $config['allowed_types']    ='jpg|png|jpeg';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('logo')){
                    $this->session->set_flashdata('pesan','Logo Toko Online Gagal Di Update file tidak diijinkan');
                    redirect('admin/setting/viewLogo');
                    die();
                }else{
                    $logo = $this->upload->data('file_name');                
                }
            }
            

            $data  = array('logo'    => $logo);
            $where = $id ;     
            $this->model_logo->editLogo($data,'logo');
            $this->session->set_flashdata('pesan','Logo Toko Online Berhasil Update');
            redirect('admin/setting/viewLogo');
            
        }


        public function igFeed()
        {
            $data['gambar'] = $this->model_logo->getigFeed();
            $where = $this->session->userdata('id');
            $data['profile'] = $this->model_user->getProfile($where);
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('template_admin/topbar',$data);
            $this->load->view('admin/igfeed',$data);
            $this->load->view('template_admin/footer');
        }

        public function uploadIGfeed()
        {  
            if (isset($_POST['upload'])) 
            {
                
                $config['allowed_types']    = 'jpg|png|pdf|jpeg';
                $config['upload_path']      = './assets/img/igFeed/';
                $config['max_size']         = 2048;
                $config['height']           = 58;
                $config['width']            = 58;
                $config['encrypt_name']     = TRUE;
                $this->load->library('upload',$config);
                
                //file1
                if (!empty($_FILES['img1']['name'])) {
                    
                    if (!$this->upload->do_upload('img1')) {
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger">Gagal Upload Gambar</div>');
                        redirect('admin/setting/igFeed');
                    }else{
                        $file1 = $this->upload->data('file_name');
                    }
                }elseif (empty($_FILES['img1']['name'])) {
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger">File Kosong Tidak Di ijinkan</div>');
                        redirect('admin/setting/igFeed');
                }

                //file2 
                if (!empty($_FILES['img1']['name'])) {
                   
                    if (!$this->upload->do_upload('img2')) {
                       $this->session->set_flashdata('pesan','<div class="alert alert-danger">File Kosong Tidak Di ijinkan</div>');
                       redirect('admin/setting/igFeed');
                    }else{
                        $file2 = $this->upload->data('file_name');
                    }
                }

                //file3
                if (!empty($_FILES['img3']['name'])) {
                    
                    if (!$this->upload->do_upload('img3')) {
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger">Gagal Upload Gambar</div>');
                        redirect('admin/setting/igFeed');
                    }else{
                        $file3 = $this->upload->data('file_name');
                    }
                }

                //file4 
                if (!empty($_FILES['img4']['name'])) {
                   
                    if (!$this->upload->do_upload('img4')) {
                       $this->session->set_flashdata('pesan','<div class="alert alert-danger">File Kosong Tidak Di ijinkan</div>');
                       redirect('admin/setting/igFeed');
                    }else{
                        $file4 = $this->upload->data('file_name');
                    }
                }

                //file5
                if (!empty($_FILES['img5']['name'])) {
                    
                    if (!$this->upload->do_upload('img5')) {
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger">Gagal Upload Gambar</div>');
                        redirect('admin/setting/igFeed');
                    }else{
                        $file5 = $this->upload->data('file_name');
                    }
                }

                //file6 
                if (!empty($_FILES['img6']['name'])) {
                   
                    if (!$this->upload->do_upload('img6')) {
                       $this->session->set_flashdata('pesan','<div class="alert alert-danger">File Kosong Tidak Di ijinkan</div>');
                       redirect('admin/setting/igFeed');
                    }else{
                        $file6 = $this->upload->data('file_name');
                    }
                }

                //file5
                if (!empty($_FILES['img7']['name'])) {
                    
                    if (!$this->upload->do_upload('img7')) {
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger">Gagal Upload Gambar</div>');
                        redirect('admin/setting/igFeed');
                    }else{
                        $file7 = $this->upload->data('file_name');
                    }
                }

                //file6 
                if (!empty($_FILES['img8']['name'])) {
                   
                    if (!$this->upload->do_upload('img8')) {
                       $this->session->set_flashdata('pesan','<div class="alert alert-danger">File Kosong Tidak Di ijinkan</div>');
                       redirect('admin/setting/igFeed');
                    }else{
                        $file8 = $this->upload->data('file_name');
                    }
                }





                $data = ['img1' => $file1 ,'img2' => $file2 ,'img3' => $file3 ,'img4' => $file4 ,'img5' => $file5  ,'img6' => $file6 ,'img7' => $file7 , 'img8' => $file8 ];
                $insert = $this->db->insert('igfeed',$data);
                $this->session->set_flashdata('pesan','<div class="alert alert-danger">Sukses</div>');
                        redirect('admin/setting/igFeed');
            }
        }


        public function hapusIG($id)
        {
            $where = array('id' => $id);
             $this->model_logo->hapusIG($where,'igfeed');
             $this->session->set_flashdata('pesan','<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show"> <span class="badge badge-pill badge-warning">Berhasil</span>
                                        Data Anda Terhapus Semua
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>');
                redirect('admin/setting/igFeed');
        }

        public function Changepass()
        {
            $this->form_validation->set_rules('pass','pass','required|min_length[6]|max_length[6]|matches[pass1]',[
                'required'      => 'password tidak boleh kosong',
                'min_length'    => 'password tidak boleh kurang dari 6 huruf',
                'max_length'    => 'password tidak boleh lebih dari 6 huruf',
                'matches'       => 'password tidak boleh berbeda'
            ]);
            $this->form_validation->set_rules('pass1','pass1','required',[
                'required'      => 'isian ini tidak boleh kosong']);

            if ($this->form_validation->run() == FALSE) {
               
                $data['gambar'] = $this->model_logo->getigFeed();
                $where = $this->session->userdata('id');
                $data['profile'] = $this->model_user->getProfile($where);
                $this->load->view('template_admin/header');
                $this->load->view('template_admin/sidebar');
                $this->load->view('template_admin/topbar',$data);
                $this->load->view('admin/changepass',$data);
                $this->load->view('template_admin/footer');
            }else{
                $where = array('id' => $this->input->post('id'));
                $data = array('pass' => $this->input->post('pass'));

                $this->model_user->updateProfile('admin',$data,$where);
                $this->session->set_flashdata('alert','Berhasil');
                redirect('admin/setting/Changepass');
            }
        }
 }