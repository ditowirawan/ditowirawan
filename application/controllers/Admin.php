<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$this->template->load('login','login');
	}

	public function forgot_password()
	{
		$this->template->load('login','forgot_password');
	}

	public function index()
	{
		$this->template->load('template','index');
	}

	public function map()
	{
		$this->template->load('template','dashboard/map');
	}

	public function master_user()
	{
		$this->template->load('template','master/user');
	}
	public function lokasi_rapat()
	{
		$this->template->load('template','master/lokasi_rapat');
	}
	public function ruang_rapat()
	{
		$this->template->load('template','master/ruang_rapat');
	}
	public function reservasi_agenda_ruang_rapat()
	{
		$this->template->load('template','manajemen_rapat/reservasi_agenda_ruang_rapat');
	}
	public function undangan_rapat()
	{
		$this->template->load('template','manajemen_rapat/undangan_rapat');
	}
	public function pelaksanaan_rapat()
	{
		$this->template->load('template','manajemen_rapat/pelaksanaan_rapat');
	}
	public function add_undangan_rapat()
	{
		$this->template->load('template','manajemen_rapat/add_undangan_rapat');
	}
	public function edit_undangan()
	{
		$this->template->load('template','manajemen_rapat/edit_undangan');
	}
	public function add_pelaksanaan_rapat()
	{
		$this->template->load('template','manajemen_rapat/add_pelaksanaan_rapat');
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */