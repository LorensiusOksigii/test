<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->model('model');
	}

 	public function index()
	{
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/index');
		$this->load->view('template/dashboard_footer');
	}

	public function current_panel()
	{
		$data['table'] = $this->model->get_last_ten_entries('tabel')->result();
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/current_panel', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function current_battery()
	{
		$data['table'] = $this->model->get_last_ten_entries('tabel')->result();
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/current_battery', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function current_output()
	{
		$data['table'] = $this->model->get_last_ten_entries('tabel')->result();
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/current_output', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function voltage_panel()
	{
		$data['table'] = $this->model->get_last_ten_entries('tabel')->result();
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/voltage_panel', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function voltage_battery()
	{
		$data['table'] = $this->model->get_last_ten_entries('tabel')->result();
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/voltage_battery', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function voltage_output()
	{
		$data['table'] = $this->model->get_last_ten_entries('tabel')->result();
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/voltage_output', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function chart()
	{
		$data['table'] = $this->model->get_last_ten_entries('tabel')->result();
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/chart', $data);
		$this->load->view('template/dashboard_footer');
	}

	public function table()
	{
		$data['table'] = $this->model->get_last_ten_entries('tabel')->result();
		$this->load->view('template/dashboard_header');
		$this->load->view('dashboard/table', $data);
		$this->load->view('template/dashboard_footer');
	}
}
