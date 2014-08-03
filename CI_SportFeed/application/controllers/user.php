<?php

class User extends CI_Controller {

	
	function index()
	{
		
	}
	
	
	function random_string($length)
	{
		$base = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
		$max = strlen($base)-1;
		$activatecode = '';
		mt_srand((double)microtime()*1000000);
		while (strlen($activatecode) < $length+1)
		{
				$activatecode.=$base{mt_rand(0, $max)};
		}
		
		return $activatecode;
	}

	public function login()
	{
		// Catch JSON data from Angular
		$object =  json_decode(file_get_contents("php://input"));

		// Separate username
		$username = $object->data->username;

		// Separate password
		$password = $object->data->password;

		$this->load->model("user_model");

		// 0 if not found, and user_id if user found
		$login = $this->user_model->login($username, $password);

		if($login != 0)
		{
			$this->session->set_userdata("login", 1);
			$this->session->set_userdata("user_id", $login);
		}

		echo $login;
	}
	
}
?>