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
			//Sport specific news selected
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

				$this->load->view("newsContainer", $data);	
			}
			//Sport and team specific news selected
			else
			{
				
				$this->sportsfeed->updateTeamFeed($team, $sport);



				$team_id = $this->rss_db_model->getTeamId($team, $sport);

				$data["entries"] = $this->rss_db_model->getTeamNewsFromDB($team_id);

				$this->load->view("newsContainer", $data);

			}

		
		}

		
	}
	
	
	
																	  																			
}
?>