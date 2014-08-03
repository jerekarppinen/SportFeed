<?php

class Register extends CI_Controller {

	
	function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|xss_clean|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_rules('password_conf', 'Confirm Password', '|required|matches[password]|xss_clean');
			
		if($this->form_validation->run() == FALSE) {
			// hasn't been run or there are validation errors
			
			$this->load->view('view_register');
		}
		else {
			// everything is good - process the form

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			
			$activation_code = $this->random_string(10);
			
			$this->load->model('user_model');
			$this->user_model->register_user($username, $password, $email, $activation_code);
			
			$this->email->from('info@sportfeed.com','SportFeed');
			$this->email->to($email);
			$this->email->subject('Registration Confirmation');
			$this->email->message('Please click this link to confirm your registration ' .  anchor('http://localhost/CI_SportFeed/index.php/register/register_confirm/' . $activation_code, 'Confirm Registration'));
			
			$base_url = base_url();

			//echo 'Please click this link to confirm your registration ' .  anchor($base_url."/index.php/user/register_confirm/' . $activation_code, 'Confirm Registration');
			echo "Please click this link to confirm your registration <a href='$base_url/index.php/register/register_confirm/$activation_code'>Confirm Registration</a>";
			//$this->email->send();
			
		}	
	}
	

	function register_confirm($registration_code)
	{
		//$registration_code = $this->uri->segment(3);
		
		if($registration_code == '')
		{
			echo "Error: no registration code in URL";
			exit();
		}
		else 
			{
				$this->load->model("user_model");
				$result = $this->user_model->findUserByActivationcode($registration_code);

				if($result == 1)
				{
					echo "You have succesfully registered!";
				}
				elseif($result == 0)
				{
					echo "You have failed to register - no record found for that activation code.";
				}
			}
		
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

	
}
