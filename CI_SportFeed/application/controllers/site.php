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
		$entries = $this -> sportsfeed -> getGeneralMLB();

		// Call model to perform db queries for RSS
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
	

	// NFL-joukkueet
	function nflteam() {
		$team = $_GET["abbr"];
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> loadNFLTeamFeed($team);
		$this -> load -> view("home", $data);
	}
	function arizona_cardinals() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> arizona_cardinals();
		$this -> load -> view("home", $data);
	}

	function atlanta_falcons() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> atlanta_falcons();
		$this -> load -> view("home", $data);
	}

	function baltimore_ravens() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> baltimore_ravens();
		$this -> load -> view("home", $data);
	}
	
	function buffalo_bills() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> buffalo_bills();
		$this -> load -> view("home", $data);
	}	

	function carolina_panthers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> carolina_panthers();
		$this -> load -> view("home", $data);
	}	

	function chicago_bears() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> chicago_bears();
		$this -> load -> view("home", $data);
	}
	
	function cincinnati_bengals() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> cincinnati_bengals();
		$this -> load -> view("home", $data);
	}
	
	function cleveland_browns() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> cleveland_browns();
		$this -> load -> view("home", $data);
	}

	function dallas_cowboys() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> dallas_cowboys();
		$this -> load -> view("home", $data);
	}
	
	function denver_broncos() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> denver_broncos();
		$this -> load -> view("home", $data);
	}
	
	function detroit_lions() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> detroit_lions();
		$this -> load -> view("home", $data);
	}	
	
	function green_bay_packers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> green_bay_packers();
		$this -> load -> view("home", $data);
	}									

	function houston_texans() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> houston_texans();
		$this -> load -> view("home", $data);
	}
	
	function indianapolis_colts() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> indianapolis_colts();
		$this -> load -> view("home", $data);
	}
	
	function jaxonville_jaguars() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> jaxonville_jaguars();
		$this -> load -> view("home", $data);
	}
	
	function kansas_city_chiefs() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> kansas_city_chiefs();
		$this -> load -> view("home", $data);
	}				

	function miami_dolphins() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> miami_dolphins();
		$this -> load -> view("home", $data);
	}						

	function new_england_patriots() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> new_england_patriots();
		$this -> load -> view("home", $data);
	}
	
	function new_orleans_saints() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> new_orleans_saints();
		$this -> load -> view("home", $data);
	}
	
	function new_york_giants() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> new_york_giants();
		$this -> load -> view("home", $data);
	}	

	function new_york_jets() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> new_york_jets();
		$this -> load -> view("home", $data);
	}
	
	function oakland_raiders() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> oakland_raiders();
		$this -> load -> view("home", $data);
	}	
	
	function philadelphia_eagles() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> philadelphia_eagles();
		$this -> load -> view("home", $data);
	}
	
	function pittsburgh_stealers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> pittsburgh_stealers();
		$this -> load -> view("home", $data);
	}
	
	function san_diego_chargers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> san_diego_chargers();
		$this -> load -> view("home", $data);
	}
	
	function san_francisco_49ers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> san_francisco_49ers();
		$this -> load -> view("home", $data);
	}
	
	function seattle_seahawks() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> seattle_seahawks();
		$this -> load -> view("home", $data);
	}
	
	function st_louis_rams() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> st_louis_rams();
		$this -> load -> view("home", $data);
	}
	
	function tampa_bay_buccaneers() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> tampa_bay_buccaneers();
		$this -> load -> view("home", $data);
	}
	
	function tennessee_titans() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> tennessee_titans();
		$this -> load -> view("home", $data);
	}	
	
	function washington_redskins() {
		
		$this -> load -> model('sportsfeed');
		$data['entries'] = $this -> sportsfeed -> washington_redskins();
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