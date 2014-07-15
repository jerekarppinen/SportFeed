<?php

class Site extends CI_Controller {

	public function index($sport = "", $team = "")
	{

		// Loading models
		$this->load->model('sportsfeed');
		$this->load->model('rss_db_model');
		
		if($sport == "" && $team == "")
		{	

			// Read rss feeds and commit updates if necessary
			$this->sportsfeed->updateAllFeeds();

			// Get news from DB
			//$feedsCombined = $this->rss_db_model->getAllNewsFromDB();

			// Serve news to client side
			// echo json_encode($feedsCombined);

			// this row and "data" attribute from below can be removed when client side accepts json encoded data
			$data["entries"] = $this->rss_db_model->getAllNewsFromDB();

			$this->load->view("home", $data);
		}
		else
		{
			if($team == "")
			{
				// Read rss feed for specific sport and commit updates if necessary
				$this->sportsfeed->updateSportFeed($sport);

				// Get sport_id for db queries
				$sport_id = $this->rss_db_model->getSportId($sport);

				// Get news from DB
				//$feedsCombined = $this->rss_db_model->getAllNewsFromDB();

				// Serve news to client side
				// echo json_encode($feedsCombined);

				// this row and "data" attribute from below can be removed when client side accepts json encoded data
				$data["entries"] = $this->rss_db_model->getNewsFromDB($sport_id);

				$this->load->view("home", $data);	
			}
			else
			{
				
				$this->sportsfeed->updateTeamFeed($team, $sport);



				$team_id = $this->rss_db_model->getTeamId($team, $sport);

				$data["entries"] = $this->rss_db_model->getTeamNewsFromDB($team_id);

				$this->load->view("home", $data);

			}

		
		}

		
	}
	
	
	/*function mlb() {
		
		$this -> load -> model('sportsfeed');
		$entries = $this -> sportsfeed -> getGeneralMLB();

		print_r($entries);

	/*	// Call model to perform db queries for RSS
		$this -> load -> model('rss_db_model');

		// Define sport for database query, taken from uri
		$sport = $this->uri->segments[2];

		// Get sport_id for db queries
		$sport_id = $this->rss_db_model->getSportId($sport);
		
		// true if empty, false if not
		$empty = $this->rss_db_model->checkIfEmpty($sport_id);	

		if($empty == true)
		{
			// If there are no news, we don't have to compare timestamps
			// Just insert them mothafuckas
			// true if success, false if something went wrong
			$insert = $this->rss_db_model->insertNews($entries, $sport_id);

		}
		elseif($empty == false)
		{
			$latestNewsTimestamp = $this->rss_db_model->latestNewsTimestamp($sport_id);

			// Not empty, insert only new news
			// true if success, false if something went wrong
			$insert = $this->rss_db_model->insertLatestNews($entries, $sport_id, $latestNewsTimestamp);
		}

		$data["entries"] = $this->rss_db_model->getNewsFromDB($sport_id);
		

		$this -> load -> view("home", $data); */
	//}
	/*
	function nfl() {
		
		$this -> load -> model('sportsfeed');
		$entries = $this -> sportsfeed -> getGeneralNFL();
		print_r($entries);
		//$this -> load -> view("home", $data);
	}*/
	
	/*function nba() {
		
		$this -> load -> model('sportsfeed');
		$entries = $this -> sportsfeed -> getGeneralNBA();
		print_r($entries);
		//$this -> load -> view("home", $data);
	}


	function nhl() {
		
		$this -> load -> model('sportsfeed');
		$entries = $this -> sportsfeed -> getGeneralNHL();
		print_r($entries);
		//$this -> load -> view("home", $data);
	}
	

	// NFL-joukkueet
	function nflteam() {
		$team = $_GET["abbr"];
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> loadNFLTeamFeed($team);
		$this -> load -> view("home", $data);
	}
	
	
	// NHL-joukkueet
	
	 // WESTERN
	 /***************
	  * *************
	  */	
	  
	function anaheim_ducks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> anaheim_ducks();
		$this -> load -> view("home", $data);
	}
	
	function calgary_flames() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> calgary_flames();
		$this -> load -> view("home", $data);
	}																	

	function chicago_blackhawks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> chicago_blackhawks();
		$this -> load -> view("home", $data);
	}
	
	function colorado_avalanche() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> colorado_avalanche();
		$this -> load -> view("home", $data);
	}
	
	function dallas_stars() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> dallas_stars();
		$this -> load -> view("home", $data);
	}	
	
	function edmonton_oilers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> edmonton_oilers();
		$this -> load -> view("home", $data);
	}	
	
	function los_angeles_kings() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> los_angeles_kings();
		$this -> load -> view("home", $data);
	}	
	
	function minnesota_wild() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> minnesota_wild();
		$this -> load -> view("home", $data);
	}	
	
	function nashville_predators() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> nashville_predators();
		$this -> load -> view("home", $data);
	}
	
	function phoenix_coyotes() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> phoenix_coyotes();
		$this -> load -> view("home", $data);
	}	
	
	function san_jose_sharks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> san_jose_sharks();
		$this -> load -> view("home", $data);
	}	
	
	function st_louis_blues() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> st_louis_blues();
		$this -> load -> view("home", $data);
	}	
	
	function vancouver_canucks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> vancouver_canucks();
		$this -> load -> view("home", $data);
	}	
	
	function winnipeg_jets() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> winnipeg_jets();
		$this -> load -> view("home", $data);
	}	
	
	
	 // EASTERN
	 /***************
	  * *************
	  */
	  
	function boston_bruins() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> boston_bruins();
		$this -> load -> view("home", $data);
	}	
	
	function buffalo_sabres() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> buffalo_sabres();
		$this -> load -> view("home", $data);
	}		
	
	function carolina_hurricanes() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> buffalo_sabres();
		$this -> load -> view("home", $data);
	}
	
	function columbus_blue_jackets() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> columbus_blue_jackets();
		$this -> load -> view("home", $data);
	}	
	
	function detroit_red_wings() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> detroit_red_wings();
		$this -> load -> view("home", $data);
	}
	
	function florida_panthers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> florida_panthers();
		$this -> load -> view("home", $data);
	}					
		
	function montreal_canadiens() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> montreal_canadiens();
		$this -> load -> view("home", $data);
	}
	
	function new_jersey_devils() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> new_jersey_devils();
		$this -> load -> view("home", $data);
	}
	
	function new_york_islanders() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> new_york_islanders();
		$this -> load -> view("home", $data);
	}	
	
	function new_york_rangers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> new_york_rangers();
		$this -> load -> view("home", $data);
	}
	
	function ottawa_senators() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> ottawa_senators();
		$this -> load -> view("home", $data);
	}
	
	function philadelphia_flyers() {
	
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> philadelphia_flyers();
		$this -> load -> view("home", $data);
	}									  																			
	
	function pittsburgh_penguins() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> pittsburgh_penguins();
		$this -> load -> view("home", $data);
	}	
	
	function tampa_bay_lightning() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> tampa_bay_lightning();
		$this -> load -> view("home", $data);
	}
	
	function toronto_maple_leafs() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> toronto_maple_leafs();
		$this -> load -> view("home", $data);
	}	
	
	function washington_capitals() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> washington_capitals();
		$this -> load -> view("home", $data);
	}
	
	
	// NBA
	/* ***************************************************************
	 * 
	 */
	 
	function bobcats() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> bobcats();
		$this -> load -> view("home", $data);
	}

	function bucks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> bucks();
		$this -> load -> view("home", $data);
	}
	
	function bulls() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> bulls();
		$this -> load -> view("home", $data);
	}
	
	function cavaliers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> cavaliers();
		$this -> load -> view("home", $data);
	}
	
	function celtics() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> celtics();
		$this -> load -> view("home", $data);
	}
	
	function clippers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> clippers();
		$this -> load -> view("home", $data);
	}
	
	function grizzlies() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> grizzlies();
		$this -> load -> view("home", $data);
	}	
	
	function hawks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> hawks();
		$this -> load -> view("home", $data);
	}	
	
	function heat() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> heat();
		$this -> load -> view("home", $data);
	}	
	
	function jazz() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> jazz();
		$this -> load -> view("home", $data);
	}																 	
		
	function kings() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> kings();
		$this -> load -> view("home", $data);
	}	
	
	function knicks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> knicks();
		$this -> load -> view("home", $data);
	}			
	
	function lakers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> lakers();
		$this -> load -> view("home", $data);
	}	
	
	function magic() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> magic();
		$this -> load -> view("home", $data);
	}	
	
	function mavericks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> mavericks();
		$this -> load -> view("home", $data);
	}	
	
	function nets() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> nets();
		$this -> load -> view("home", $data);
	}	
	
	function nuggets() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> nuggets();
		$this -> load -> view("home", $data);
	}	
	
	function pacers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> pacers();
		$this -> load -> view("home", $data);
	}	
	
	function pelicans() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> pelicans();
		$this -> load -> view("home", $data);
	}	
	
	function pistons() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> pistons();
		$this -> load -> view("home", $data);
	}	
	
	function raptors() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> raptors();
		$this -> load -> view("home", $data);
	}
	
	function rockets() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> rockets();
		$this -> load -> view("home", $data);
	}	
	
	function sixers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> sixers();
		$this -> load -> view("home", $data);
	}	
	
	function spurs() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> spurs();
		$this -> load -> view("home", $data);
	}	
	
	function suns() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> suns();
		$this -> load -> view("home", $data);
	}
	
	function thunder() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> thunder();
		$this -> load -> view("home", $data);
	}	
	
	function trail_blazers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> trail_blazers();
		$this -> load -> view("home", $data);
	}	
	
	function timberwolves() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> timberwolves();
		$this -> load -> view("home", $data);
	}	
	
	function warriors() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> warriors();
		$this -> load -> view("home", $data);
	}	
	
	function wizards() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> wizards();
		$this -> load -> view("home", $data);
	}	

	// MLB
	/* ***************************************************************
	 * 
	 */
	
	//Hae MLB joukkueen rss feed
	function mlbteam() {
		$team = $_GET["abbr"];
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> loadMLBTeamFeed($team);
		$this -> load -> view("home", $data);
	}
																					  																			
}
?>