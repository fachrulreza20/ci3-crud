<?php

class Mahasiswa_model extends CI_model{
	public function index(){

		return $this->db->get('mahasiswa')->result_array();	

	}

	public function insert(){

		$data = [

			"nama" => $this->input->post('nama', true), // true adalah htmlspecialchars
			"nrp" => $this->input->post('nrp', true),
			"jurusan" => $this->input->post('jurusan', true)

		];

		$this->db->insert('mahasiswa', $data);
	}

	public function delete($id){

	  	$this->db->where('id', $id);
	  	$this->db->delete('mahasiswa');
//	  	$this->db->delete('mahasiswa', ['id' => $id]); // sama aja, cuma sebaris

	}

	public function getDetail($id){

	  	return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();	// karena cuma 1 row yang dihasilkan pake row_array()

	}


	public function update(){

		$data = [

			"nama" => $this->input->post('nama', true), // true adalah htmlspecialchars
			"nrp" => $this->input->post('nrp', true),
			"jurusan" => $this->input->post('jurusan', true)

		];


	  	$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);
	}


	public function search(){

	  	$keyword = $this->input->post('search');

	    $this->db->like('nama', $keyword);
	    $this->db->or_like('nrp', $keyword);
	    $this->db->or_like('jurusan', $keyword);

	    return $this->db->get('mahasiswa')->result_array();	
	  		
	}
}