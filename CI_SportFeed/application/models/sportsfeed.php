<?php

class Sportsfeed extends CI_Model {

	function getAll() {
		
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
		$this->rssparser->set_feed_url('http://mlb.mlb.com/partnerxml/gen/news/rss/ana.xml');  // get feed
		$this->rssparser->set_cache_life(30);                       // Set cache life time in minutes
		$rss = $this->rssparser->getFeed(5);                        // Get six items from the feed
		
		return $rss;
	}
}

?>