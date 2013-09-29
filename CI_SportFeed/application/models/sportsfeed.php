<?php

class Sportsfeed extends CI_Model {

	function getGeneralMLB() {
		
		/*$q = $this->db->query("SELECT menunimi FROM hutasu_sivut WHERE taso = 'paavalikko';");
		
		if($q->num_rows() > 0)
		{
		
			foreach ($q->result() as $row)
			{
				$data[] = $row;
			}
		
		return $data;
		
		}*/
		
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
		
		
		//var_dump($return_array);
		
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
	
	function anaheim_ducks() {
		$this->load->library('rssparser');                          // load library
		$this->rssparser->set_feed_url('http://ducks.nhl.com/rss/news.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(10);    
		
		return $rss;
	}																																													
}									


?>