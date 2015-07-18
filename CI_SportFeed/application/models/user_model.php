<?php

class User_model extends CI_Model {
	
	public function register_user($username, $password, $email, $activation_code)
	{
		
		$sha1_password = sha1($password);
		
		$q = "INSERT INTO users (username, password, email, activation_code, time_added) VALUES (?, ?, ?, ?, ?)";
		$this->db->query($q, array($username, $sha1_password, $email, $activation_code, time()));
	}

	public function findUserByActivationcode($registration_code)
	{
		$query = $this->db->query("SELECT user_id FROM users WHERE activation_code = '".$registration_code."';");

		if($query->num_rows() == 1)
		{
			$query = "UPDATE users SET activated = 1 WHERE activation_code = ?";
			$this->db->query($query, $registration_code);

			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function login($username, $password)
	{
		$sha1_password = sha1($password);

		$q = $this->db->query("SELECT user_id FROM users WHERE username = '".$username."' AND password = '".$sha1_password."' AND activated = 1;");

		if($q->num_rows() == 1)
		{
			return $q->row()->user_id;
		}
		else
		{
			return 0;
		}
	}
}
