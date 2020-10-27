<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "Sherly Nur Velliani";
		$data['nim'] = 1810330024;
		$mahasiswa[0] = array(
			'nim' => 1234,
			'nama' => "budi"
		);
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

}
