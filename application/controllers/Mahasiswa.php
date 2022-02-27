<?php


class Mahasiswa extends CI_Controller{


	public function __construct(){
		parent::__construct();
	  	$this->load->model('Mahasiswa_model');
	  	$this->load->library('form_validation');

	}

  public function index(){


  	$data['page_title'] = "Data Mahasiswa";
  	$data['mahasiswa'] = $this->Mahasiswa_model->index();

  	if($this->input->post('search')){
  		$data['mahasiswa'] = $this->Mahasiswa_model->search();
  	}

  	$this->load->view('templates/header', $data);
  	$this->load->view('mahasiswa/index', $data);
  	$this->load->view('templates/footer');



  }

  public function tambah(){


  	$data['page_title'] = "Tambah Data Mahasiswa";

  	$this->form_validation->set_rules('nama', 'Nama', 'required');
  	$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
  	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');



  	if($this->form_validation->run() == FALSE){
	  	$this->load->view('templates/header', $data);
	  	$this->load->view('mahasiswa/tambah', $data);
	  	$this->load->view('templates/footer');
  	}else{
  		$this->Mahasiswa_model->insert();

  		$this->session->set_flashdata('flash','Ditambahkan');

		redirect('mahasiswa'); //controller mahasiswa/index
  	}

  }


  public function hapus($id){

  	$this->Mahasiswa_model->delete($id);
	$this->session->set_flashdata('flash','Dihapus');

	redirect('mahasiswa'); //controller mahasiswa/index

  }



  public function detail($id){


  	$data['page_title'] = "Detail Data Mahasiswa";

  	$data['mahasiswa'] = $this->Mahasiswa_model->getDetail($id);



  	$this->load->view('templates/header', $data);
  	$this->load->view('mahasiswa/detail', $data);
  	$this->load->view('templates/footer');
  }







  public function update($id){


  	$this->form_validation->set_rules('nama', 'Nama', 'required');
  	$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
  	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

  	$data['mahasiswa'] = $this->Mahasiswa_model->getDetail($id);
  	$data['page_title'] = 'Ubah data Mahasiswa';
  	
  	if($this->form_validation->run() == FALSE){
	  	$this->load->view('templates/header', $data);
	  	$this->load->view('mahasiswa/update', $data);
	  	$this->load->view('templates/footer');
  	}else{
  		$this->Mahasiswa_model->update();

  		$this->session->set_flashdata('flash','Diubah');

		redirect('mahasiswa'); //controller mahasiswa/index
  	}

  }





}