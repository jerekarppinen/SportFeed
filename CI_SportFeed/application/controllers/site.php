<?php

class Site extends CI_Controller {

	function index() {
		
		$this -> AllFeeds();
	}
	
	function AllFeeds() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> AllFeeds();
		$this -> load -> view("home", $data);
	}
	
	function mlb() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> getGeneralMLB();
		$this -> load -> view("home", $data);
	}
	
	function nfl() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> getGeneralNFL();
		$this -> load -> view("home", $data);
	}
	
	function nba() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> getGeneralNBA();
		$this -> load -> view("home", $data);
	}

	function nhl() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> getGeneralNHL();
		$this -> load -> view("home", $data);
	}

}

?>