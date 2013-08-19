<?php

class Site extends CI_Controller {

	function index() {
		$this->load->model('sportsfeed');
		$data['entries'] = $this->sportsfeed->getAll();
		$this->load->view('header');
		$this->load->view("home", $data);
		$this->load->view('footer');
	}
	
}

?>