<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
	}

	public function index() {

		if ($this->session->userdata('tombol') != 'oke') {
			redirect('auth');
			die();
		}

		$this->db->select_max('suara');
		$this->db->from('calon');
		$max = $this->db->get()->result_array();
		
		$data['calon'] = $this->db->get_where('calon', ['suara' => $max[0]['suara'] ])->row_array();


		$belum= $this->db->get_where('users', ['hak'=>'1'])->result_array();
		$data['belum'] = [];
		foreach ($belum as $bl) {
			array_push($data['belum'], $bl['nama']);
		};

		$data['user']['title'] = 'Hasil';

		$this->load->view('templates/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');


	}

}