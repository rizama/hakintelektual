<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Hki extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');

		// $this->load->view('header');

	}

	public function index(){
		$this->load->view('home');
	}
	
	public function home(){
		$this->load->view('home');
	}

	public function informasi(){
		$this->load->view('informasi_hki');
	}

	public function sertifikat(){
		// $nama = $this->input->get('kec');
		// $query = $this->pic_model->get_nama($kec, 'nama');
		// echo json_encode($query)
		$this->load->view('sertifikat');
	}

	public function get_nama(){
		$nama = $this->input->get('dosen');
		$query = $this->pic_model->ambil_nama($nama, 'nama');
		echo json_encode($query);
	}
	
	public function lapor(){
		$this->load->view('lapor');
	}

	public function kontak(){
		$this->load->view('kontak');
	}

	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('institusi', 'Institusi');
		$this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
		$this->form_validation->set_rules('prodi', 'Prodi', 'required');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('ciptaan', 'Ciptaan', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->load->view('lapor');
		}else{
			
			//get the form values
			$data['nama'] = $this->input->post('nama');
			$data['judul'] = $this->input->post('judul');
			$data['institusi'] = $this->input->post('institusi');
			$data['fakultas'] = $this->input->post('fakultas');
			$data['prodi'] = $this->input->post('prodi');
			$data['ciptaan'] = $this->input->post('ciptaan');
			$data['deskripsi'] = $this->input->post('deskripsi');
			

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'jpg|png|pdf';
			$config['max_size']             = 2048;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('lapor', $error);
			}else{

				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['file'] = $upload_data['file_name'];
				$file_ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

				// var_dump($data['file']);
				// die();

				//store pic data to the db
				$this->pic_model->store_pic_data($data);

				
				$this->session->set_flashdata('success', 'Pelaporan Sertifikat Berhasil !');
				redirect('lapor');
			}
			// $this->load->view('footer');
		}
	}

	public function hasil(){
		if($this->input->post('itemName')){
			$id = (int)($this->input->post('itemName'));
			$data['results'] = $this->pic_model->search($id);
			$file_name = $data['results'][0]->file;
			$data['ext'] = pathinfo($file_name , PATHINFO_EXTENSION);
			// echo "<pre>";
			// var_dump($data);
			// echo "</pre>"; 
			$this->load->view('hasil_sertifikat', $data);	
		} else{
			redirect('sertifikat');
		}
		
	}

	public function do_download($nama){
		$this->load->helper('download');
		force_download('assets/uploads/'.$nama, NULL);
	}

	public function get_fakultas(){
		$nama = $this->input->get('fakultas');
		$query = $this->pic_model->ambil_fakultas($nama, 'nm_fakultas');
		echo json_encode($query);
	}

	public function get_prodi(){
		$nama = $this->input->get('prodi');
		$query = $this->pic_model->ambil_prodi($nama, 'nm_prodi');
		echo json_encode($query);
	}

}
