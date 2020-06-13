<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index() {

		if ($this->session->userdata('tombol') != 'oke') {
			redirect('auth');
			die();
		}
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['calon'] = $this->db->get('calon')->result();

		if($data['user']['hak']=='1'){
			$data['user']['title'] = 'Pilih Calon';
			$this->load->view('templates/header', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer');
		}else{
			$data['user']['title'] = 'Pilih Calon';
			$this->load->view('templates/header', $data);
			$this->load->view('user/sudah', $data);
			$this->load->view('templates/footer');
		}
	}
	public function pilih($no, $nim){
		$calon = $this->db->get_where('calon', ['no' => $no ])->row_array();
		$suara = (int) $calon['suara'];
		$tambah = [
			'suara'=> $suara + 1
		];
		$this->db->where('no', $no);
		$this->db->update('calon', $tambah);
		
		$this->db->get_where('users', ['nim' => $nim]);
		$this->db->where('nim', $nim);
		$this->db->update('users', ['hak'=>0]);
		redirect('User');

	}
	
}