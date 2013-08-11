<?php

class Site extends CI_Controller {

	function index() {
		$this->load->model('hutasu_sivut');
		$data['linkit'] = $this->hutasu_sivut->haeKaikki();
		$this->load->view("home", $data);
	}
	
}

?>