<?php

class Sportsfeed extends CI_Model {

	public function updateTeamFeed($team, $sport)
	{
		$this->load->library('rssparser');
		$this->load->model('rss_db_model');


		$data = $this->rss_db_model->getSportIdByTeamAndSport($team, $sport);

		$sport_id = $data->sport_id;

		// Form the url
		if($sport == "mlb")
		{
			$url = "http://partner.mlb.com/partnerxml/gen/news/rss/".$team.".xml";	
		}
		if($sport == "nfl")
		{
			$url = "http://www.nfl.com/rss/rsslanding?searchString=team&abbr=".$team;
		}
		if($sport == "nhl")
		{
			$url = "http://".$team.".nhl.com/rss/news.xml";
		}
		if($sport == "nba")
		{
			$url = "http://www.nba.com/".$team."/rss.xml";
		}		
		
		

		$this->rssparser->set_feed_url($url);
		$this->rssparser->set_cache_life(30);
		$result = $this->rssparser->getFeed(10); 	

		$team_id = $this->rss_db_model->getTeamId($team, $sport);


		$empty = $this->rss_db_model->checkIfEmptyTeam($team_id);	

		if($empty == true)
		{
			// Insert all the news, ignore latest timestamp
			$this->rss_db_model->insertTeamNews($result, $sport_id, $team_id);
		}

		elseif($empty == false)
		{
			$latestTeamNewsTimestamp = $this->rss_db_model->latestTeamNewsTimestamp($team_id);
			// Not empty, insert only new news
			// true if success, false if something went wrong
			$insert = $this->rss_db_model->insertLatestTeamNews($result, $sport_id, $latestTeamNewsTimestamp, $team_id);					
		}			

	}

	public function updateSportFeed($sport)
	{
		$this->load->library('rssparser');
		$this->load->model('rss_db_model');

		// Get RSS feed url from db
		$url = $this->db->query("SELECT sport_id, feed FROM sport WHERE sport = '".$sport."';")->row();

		$feed = $url->feed;
		$sport_id = $url->sport_id;

		$this->rssparser->set_feed_url($feed);
		$this->rssparser->set_cache_life(30);
		$result = $this->rssparser->getFeed(10); 

		// Check if db is empty regarding the sport_id
		$empty = $this->rss_db_model->checkIfEmpty($sport_id);

		if($empty == true)
		{
			// Insert all the news, ignore latest timestamp
			$this->rss_db_model->insertNews($result, $url->sport_id);
		}
		elseif($empty == false)
		{
			$latestNewsTimestamp = $this->rss_db_model->latestNewsTimestamp($sport_id);
				
			// Not empty, insert only new news
			// true if success, false if something went wrong
			$insert = $this->rss_db_model->insertLatestNews($result, $sport_id, $latestNewsTimestamp);					
		}		
	}
	
	public function updateAllFeeds()
	{
		
		$this->load->library('rssparser');
		$this->load->model('rss_db_model');
		
		// For testing purposes	
		/*	$urls = array('http://mlb.mlb.com/partnerxml/gen/news/rss/mlb.xml',
					     'http://www.nfl.com/rss/rsslanding?searchString=home',
					     'http://www.nba.com/rss/nba_rss.xml',
					     'http://www.nhl.com/rss/news.xml');*/

		
		// Get RSS feed urls from db
		$urls = $this->db->query("SELECT sport_id, feed FROM sport;")->result();

		
		// Loop urls and take content to db if necessary
		foreach($urls as $url)
		{

			$this->rssparser->set_feed_url($url->feed);
			$this->rssparser->set_cache_life(30);
			$result = $this->rssparser->getFeed(10); 	

			// Check if db is empty regarding the sport_id
			$empty = $this->rss_db_model->checkIfEmpty($url->sport_id);

			if($empty == true)
			{
				// Insert all the news, ignore latest timestamp
				$this->rss_db_model->insertNews($result, $url->sport_id);
			}
			elseif($empty == false)
			{
				$latestNewsTimestamp = $this->rss_db_model->latestNewsTimestamp($url->sport_id);
					
				// Not empty, insert only new news
				// true if success, false if something went wrong
				$insert = $this->rss_db_model->insertLatestNews($result, $url->sport_id, $latestNewsTimestamp);					
			}

		}

	}





	/*
	function getGeneralMLB() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://mlb.mlb.com/partnerxml/gen/news/rss/mlb.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);                        // Get six items from the feed

		//$feed = "http://mlb.mlb.com/partnerxml/gen/news/rss/mlb.xml";
		//$rss = simplexml_load_file($feed);
		return $rss;
	}
	
	function getGeneralNFL() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=home');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function getGeneralNBA() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/rss/nba_rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function getGeneralNHL() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} */



	// Joukkuekohtaiset feedit
	/***********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 */
	
	// NFL
	function loadNFLTeamFeed($team) {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr='+$team);  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	// NHL-joukkueet
	/***********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 */
	 
	 // WESTERN
	 /***************
	  * *************
	  */
	  
	  
	function anaheim_ducks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://ducks.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function calgary_flames() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://flames.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function chicago_blackhawks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://blackhawks.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function colorado_avalanche() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://avalanche.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function dallas_stars() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://stars.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function edmonton_oilers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://oilers.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function los_angeles_kings() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://kings.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function minnesota_wild() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://wild.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function nashville_predators() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://predators.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function phoenix_coyotes() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://coyotes.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function san_jose_sharks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://sharks.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function st_louis_blues() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://blues.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function vancouver_canucks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://canucks.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}		
	
	function winnipeg_jets() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://jets.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	
	 // EASTERN
	 /***************
	  * *************
	  */
	  
	function boston_bruins() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://bruins.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}  

	function buffalo_sabres() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://sabres.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}  	
	
	function carolina_hurricanes() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://hurricanes.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} 
	
	function columbus_blue_jackets() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://bluejackets.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} 
	
	function detroit_red_wings() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://redwings.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} 
	
	function florida_panthers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://panthers.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function montreal_canadiens() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://canadiens.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} 

	function new_jersey_devils() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://devils.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}  	 
	
	function new_york_islanders() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://islanders.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} 

	function new_york_rangers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://rangers.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function ottawa_senators() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://senators.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function philadelphia_flyers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://flyers.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function pittsburgh_penguins() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://penguins.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} 
	
	function tampa_bay_lightning() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://lightning.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} 

	function toronto_maple_leafs() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://mapleleafs.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	} 
	
	function washington_capitals() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://capitals.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	
	
	// NBA
	/* ***************************************************************
	 * 
	 */
	 function loadNBATeamFeed($team) {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/'+$team+'/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	
	// MLB
	/* ***************************************************************
	 * 
	 */	

	function loadMLBTeamFeed($team) {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://mlb.mlb.com/partnerxml/gen/news/rss/'.$team.'.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
		  																																																											
}
?>