<?php


use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mahasiswa extends REST_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}


	// #1 method GET for getting All Data and also Single Data
	public function index_get(){

		$id = $this->get('id');

		if($id === null){
			$mahasiswa = $this->Mahasiswa_model->index();
		}else{
			$mahasiswa = $this->Mahasiswa_model->index($id);
		}


		if($mahasiswa){
			$this->response([

				'status' => true,
				'data'	 => $mahasiswa
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([

				'status' 	 => false,
				'message'	 => 'id not found'
			], REST_Controller::HTTP_NOT_FOUND);

		}

	}

	// #2 method DELETE for Delete Data
	public function index_delete(){
		$id = $this->delete('id');

		if($id === null){
			$this->response([
				'status'	 => false,
				'message'	 => 'provide an id'
			], REST_Controller::HTTP_BAD_REQUEST);
		}else{
 
			if($this->Mahasiswa_model->delete($id) > 0){
				$this->response([
					'id'	 	=> $id,
					'status' 	=> true,
					'message'	=> 'deleted'
				], REST_Controller::HTTP_NOT_FOUND);
			}else{
				$this->response([
					'status' 	 => false,
					'message'	 => 'id not found'
				], REST_Controller::HTTP_NOT_FOUND);
			}

		}
	}

	// #3 method POST for Create Data
	public function index_post(){

		 // asumsi $data sudah clean by client
		$data = [

			'nama' 	=> $this->post('nama'),
			'nrp' 	=> $this->post('nrp'),
			'jurusan' 	=> $this->post('jurusan'),
		];


		if($this->Mahasiswa_model->insert($data) > 0){
				$this->response([
					'status' 	=> true,
					'message'	=> 'Data created successfully'
				], REST_Controller::HTTP_CREATED);
		}else{
				$this->response([
					'status' 	=> false,
					'message'	=> 'Failed to create data'
				], REST_Controller::HTTP_BAD_REQUEST);			
		}

	}


	public function index_put(){

		$id = $this->put('id');
		$data = [
			'nama' => $this->put('nama'),
			'nrp' => $this->put('nrp'),
			'jurusan' => $this->put('jurusan'),

		];

		if($this->Mahasiswa_model->update($data, $id) > 0){
			$this->response([
				'status'	=> true,
				'message'	=> 'Data updated successfully'
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([

				'status'	=> false,
				'message'	=> 'Failed to updated data'
			], REST_Controller::HTTP_BAD_REQUEST);
		}

	}

}








