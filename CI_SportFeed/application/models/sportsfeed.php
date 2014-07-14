<?php

class Sportsfeed extends CI_Model {

	function getGeneralMLB() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://mlb.mlb.com/partnerxml/gen/news/rss/mlb.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);                        // Get six items from the feed
		
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
	}
	
	function AllFeeds() {
		
		$this->load->library('rssparser');
		
		$fullarray = array();
		
		$rss = array('http://mlb.mlb.com/partnerxml/gen/news/rss/mlb.xml',
				     'http://www.nfl.com/rss/rsslanding?searchString=home',
				     'http://www.nba.com/rss/nba_rss.xml',
				     'http://www.nhl.com/rss/news.xml');
		
		// Haetaan kaikkien rss-feedien uutiset yhteen taulukkoon			 
		foreach($rss as $url) {
			
			$this->rssparser->set_feed_url($url);
			$this->rssparser->set_cache_life(30);
			$fullarray[] = $this->rssparser->getFeed(10); 
		}
		
		// 2-ulotteinen taulukko on väärässä muodossa, joten se pitää muuttaa yksiulotteiseksi viewiä varten
		
		foreach($fullarray as $feed) {
			
			foreach($feed as $entry) {
				
				$return_array[] = $entry; 
			}
		}
		
		
		
		// Sortataan pubDaten perusteella
		
	function cmp($a, $b) {
			$a_m = strtotime($a["pubDate"]);
			$b_m = strtotime($b["pubDate"]);
		return strcmp($b_m, $a_m);
		}
		usort($return_array,'cmp'); 
		
		return $return_array; 
	}

	// Joukkuekohtaiset feedit
	/***********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 * **********************************************************************************************************************************************
	 */
	// NFL

	function arizona_cardinals() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=ARZ');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function atlanta_falcons() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=ATL');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function baltimore_ravens() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=BAL');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function buffalo_bills() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=BUF');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function carolina_panthers() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=CAR');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function chicago_bears() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=CHI');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function cincinnati_bengals() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=CIN');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function cleveland_browns() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=CLV');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function dallas_cowboys() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=DAL');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	

	function denver_broncos() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=DEN');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function detroit_lions() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=DET');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function green_bay_packers() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=GB');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function houston_texans() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=HOU');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}			
	
	function indianapolis_colts() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=IND');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function jaxonville_jaguars() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=JAX');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function kansas_city_chiefs() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=KC');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function miami_dolphins() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=MIA');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function minnesota_vikings() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=MIN');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function new_england_patriots() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=NE');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function new_orleans_saints() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=NO');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function new_york_giants() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=NYG');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function new_york_jets() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=NYJ');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function oakland_raiders() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=OAK');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function philadelphia_eagles() {
		
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=PHI');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function pittsburgh_stealers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=PIT');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function san_diego_chargers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=SD');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function san_francisco_49ers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=SF');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function seattle_seahawks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=SEA');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function st_louis_rams() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=STL');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function tampa_bay_buccaneers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=TB');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}

	function tennessee_titans() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=TEN');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function washington_redskins() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nfl.com/rss/rsslanding?searchString=team&abbr=WAS');  // get feed
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
	 
	function bobcats() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/bobcats/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function Bucks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/bucks/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function bulls() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/bulls/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}				 
	
	function cavaliers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/cavaliers/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function celtics() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/celtics/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function clippers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/clippers/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function grizzlies() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/grizzlies/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function hawks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/hawks/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}				   	 	 	 	  	  	  	 		  	 	
	
	function heat() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/heat/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function jazz() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/jazz/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function kings() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/kings/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function knicks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/knicks/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function lakers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/lakers/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function magic() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/magic/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function mavericks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/mavericks/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function nets() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/nets/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function nuggets() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/nuggets/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function pacers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/pacers/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function pelicans() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/pelicans/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function pistons() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/pistons/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function raptors() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/raptors/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function rockets() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/rockets/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function sixers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/sixers/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function spurs() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/spurs/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function suns() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/suns/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function thunder() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/thunder/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}
	
	function trail_blazers() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/blazers/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function timberwolves() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/timberwolves/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function warriors() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/warriors/rss.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}	
	
	function wizards() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://www.nba.com/wizards/rss.xml');  // get feed
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