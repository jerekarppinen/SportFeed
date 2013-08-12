<?php

class User extends CI_Controller {

	
	function index()
	{
		$this->register();
	}
	
	function register()
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
			$this->email->message('Please click this link to confirm your registration ' .  anchor('http://localhost/CI_SportFeed/index.php/user/register_confirm/' . $activation_code, 'Confirm Registration'));
			
			echo 'Please click this link to confirm your registration ' .  anchor('http://localhost/CI_SportFeed/index.php/user/register_confirm/' . $activation_code, 'Confirm Registration');
			//$this->email->send();
			
		}	
			
		
		
	}

	function register_confirm()
	{
		$registration_code = $this->uri->segment(3);
		
		if($registration_code == '')
		{
			echo "Error: no registration code in URL";
			exit();
		}
		else 
			{
				$query = "SELECT user_id FROM users WHERE activation_code = ?";
				$result = $this->db->query($query, $registration_code);
				
				if($result->num_rows() == 1)
				{
					$query = "UPDATE users SET activated = 1 WHERE activation_code = ?";
					$this->db->query($query, $registration_code);
					
					echo "You have succesfully registered!";
				}
				else {
					
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
?>