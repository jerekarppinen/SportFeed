<?php

class Site extends CI_Controller {

	function index() {
		$this->load->model('sportsfeed');
		$data['entries'] = $this->sportsfeed->getAll();
		$this->load->view("home", $data);
	}
	
}

?>