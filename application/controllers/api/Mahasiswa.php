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

}

