 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
	}
	public function index()	
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');

		if ($this->form_validation->run() == false)
		{
			$data['title'] = 'user-authentication';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/auth_header');
		}
		else {
			$this->_login();
		}	
	}

	private function _login ()
	{
		$username = $this->input->post('name');
		$password = $this->input->post('password');

		if($username == 'admin' && $password== 'admin')
		{
			$this->load->view('template/dashboard_header');
			$this->load->view('dashboard/index');
			$this->load->view('template/dashboard_footer');
		}
		else
		{
			$data['title'] = 'user-authentication';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/auth_header');
		}
		// // $user_email = $this->db->get_where('user', ['email'=> $email])->row_array();
		// $user_password = $this->db->get_where('user', ['password'=> $password])->row_array();
		// var_dump($user_email, $user_password);
		// die;


		// if(password_verify($passwor, $user['password']));
		// {
		// 	$this->session->set_userdata
		// 	redirect('admin');
		// }
		// else {
		// 	$this->_login();
		// }
	}

	public function registration()
	{	
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) 
		{
			$data['title'] = 'user-registration';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('template/auth_header'); 
		}
		else
		{
			$data = [
			'name' => $this->input->post('name', true),
			'email' => $this->input->post('email', true),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'date_created' => time()
		];

		$this->db->insert('user', $data);
		// $this->session->set_flasdata('message', '<div class="alert alert-succes" role="alert">akunnya uda jadi oii!</div>');
		redirect('auth');		
	}	
	}

}