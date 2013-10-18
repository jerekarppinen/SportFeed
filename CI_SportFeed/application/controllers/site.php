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
	
	// NFL-joukkueet
	
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
}

?>