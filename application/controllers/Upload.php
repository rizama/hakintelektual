<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		
		$this->load->view('header');

	}
	
	public function form(){
		$this->load->view('upload_form');
		$this->load->view('footer');
	}
	
	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('institusi, "Institusi', 'required');
		$this->form_validation->set_rules('ciptaan', 'Ciptaan', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->load->view('upload_form');
		}else{
			
			//get the form values
			$data['nama'] = $this->input->post('nama');
			$data['judul'] = $this->input->post('judul');
			$data['institusi'] = $this->input->post('institusi');
			$data['ciptaan'] = $this->input->post('ciptaan');
			$data['deskripsi'] = $this->input->post('deskripsi');
			

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['max_size']             = 2048;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['file'] = $upload_data['file_name'];

				// var_dump($data['file']);
				// die();

				//store pic data to the db
				$this->pic_model->store_pic_data($data);

				redirect('/');
			}
			$this->load->view('footer');
		}
	}
}
