<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiwa extends CI_Controller {

	public function index()
	{

		$data['nama_lengkap'] = "Rizqi Akbarianto";
		$data['nim'] = "1810320002";
		$mahasiswa[0] = array(
			'nim'  => "1810320003",
			'nama' => "Ruslan"
		);


		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);

	}
	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

}

/* End of file Mahasiwa.php */
/* Location: ./application/controllers/Mahasiwa.php */