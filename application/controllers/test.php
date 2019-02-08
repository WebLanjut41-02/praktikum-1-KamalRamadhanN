<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index($value='login')
	{
		$this->load->view('pages/'.$value);
	}

	public function cek()
	{
		$user = array(
			array("username" => "Kamal", "pass" => 123),
			array("username" => "Amaw", "pass" => 321),
			array("username" => "Ramadhan", "pass" => 213)
		);

		$username = $this->input->post('username');
		$pass = $this->input->post('pass');

		for ($i=0; $i <= count($user) ; $i++) { 
			if ($user[$i]['username'] == $username && $user[$i]['pass'] == $pass) {
				$_SESSION['user']=$user;
				redirect('test/out','refresh');
			}
		}
		redirect('test/index','refresh');
	}

	public function out()
	{
		$this->load->view('pages/logout');
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */
?>