<?php

class Rss_db_model extends CI_Model
{
	public function index(){}

	// Returns id of a given sport
	public function getSportId($sport)
	{
		// Select sport_id from sports table
		// The reason to have a separate table is to ease the workload if the sport name ever changes
		return $this->db->query("SELECT sport_id FROM sport WHERE sport = '".$sport."';")->row()->sport_id;
	}

	// Method to check whether there are any news regarding given sport
	public function checkIfEmpty($sport_id)
	{

		$query = $this->db->query("SELECT * FROM news WHERE sport_id = ".$sport_id.";");

		if($query->num_rows() > 0) return false;
		else return true;

	}

	public function insertNews($entries, $sport_id)
	{
		foreach($entries as $entry)
		{
			foreach($entry as $item) 
			{
				if(!empty($item))
				{
					$time_added = strtotime($item->pubDate);

					// String replace single quotes
					$description = str_replace("'", "\'", $item->description);
					$title		 = str_replace("'", "\'", $item->title);

					$query = $this->db->query("INSERT INTO

										news

										(title,
										 link,
										 guid,
										 description,
										 sport_id,
										 time_added,
										 pubdate)

										VALUES

										('".$title."',
										 '".$item->link."',
										 '".$item->guid."',
										 '".$description."',
										 ".$sport_id.",
										 ".$time_added.",
										 '".$item->pubDate."');");

					if(!$query)
					{
						// Something went wrong
						return false;
					}

				} 
			}
		}	

		return true;
	}

	public function insertLatestNews($entries, $sport_id, $latestNewsTimestamp)
	{
		foreach($entries as $entry)
		{
			foreach($entry as $item) 
			{
				if(!empty($item))
				{
					$timestamp = strtotime($item->pubDate);

					// If pubDate from rss feed is greater than latest timestamp from db, insert
					if($timestamp > $latestNewsTimestamp)
					{
						$time_added = strtotime($item->pubDate);

						// String replace single quotes
						$description = str_replace("'", "\'", $item->description);
						$title		 = str_replace("'", "\'", $item->title);

						$query = $this->db->query("INSERT INTO

											news

											(title,
											 link,
											 guid,
											 description,
											 sport_id,
											 time_added,
											 pubdate)

											VALUES

											('".$title."',
											 '".$item->link."',
											 '".$item->guid."',
											 '".$description."',
											 ".$sport_id.",
											 ".$time_added.",
											 '".$item->pubDate."');");

						if(!$query)
						{
							// Something went wrong
							return false;
						}

					}
				}
			}
		}

		return true;
	}

	public function latestNewsTimestamp($sport_id)
	{
		return $this->db->query("SELECT MAX(time_added) as latest FROM news WHERE sport_id = ".$sport_id.";")->row()->latest;
	}

	public function getNewsFromDB($sport_id)
	{
		return $this->db->query("SELECT * FROM news WHERE sport_id = ".$sport_id.";")->result();
	}
}
	
