<?php

class User_model extends CI_Model {
	
	function register_user($username, $password, $email, $activation_code) {
		
		$sha1_password = sha1($password);
		
		$q = "INSERT INTO users (username, password, email, activation_code) VALUES (?, ?, ?, ?)";
		$this->db->query($q, array($username, $sha1_password, $email, $activation_code));
	}
}
