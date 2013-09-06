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
}

?>