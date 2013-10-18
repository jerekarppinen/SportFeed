<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="<?php echo base_url();?>application/css/styles.css"> 
<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/jquery.203.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/masonry.js"></script>
<title>Sportster!</title>
</head>
<body>
<script type="text/javascript">
	var contti = $('#news-container');
	contti.masonry({
	  // options
	  columnWidth: 200,
	  itemSelector: '.item'
	});
</script>
<div id="header"> 
	<a id="bannerHolder" href="<?php echo base_url();?>index.php/site/"><img id="banner" src="<?php echo base_url();?>/application/images/banneri.jpg" /></a> 
	<div id="loginControl" class="clearfix"> 
		<a href="<?php echo base_url();?>index.php/user">Register</a><br/><br/>
		<form method="post"><input type="text"/><br/><input type="password"/><br/><input type="submit" name="log" value="Log in"/></form>
	</div>
</div>
<div id="wrapper" class="clearfix">
	<ul id="navbox" class="clearfix">
		<li><a href="<?php echo base_url();?>index.php/site/"><strong>Etusivu</strong></a></li>
		<li><a href="<?php echo base_url();?>index.php/site/mlb"><strong>MLB</strong></a>
				<ul>
					<li><a href="">Homoja</a></li>
					<li><a href="">Muita homoja</a></li>
				</ul>
		</li>
		<li><a href="<?php echo base_url();?>index.php/site/nfl"><strong>NFL</strong></a>
				<ul>
					<li><a href="<?php echo base_url();?>index.php/site/arizona_cardinals">Arizona Cardinals</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/atlanta_falcons">Atlanta Falcons</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/baltimore_ravens">Baltimore Ravens</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/buffalo_bills">Buffalo Bills</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/carolina_panthers">Carolina Panthers</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/cicago_bears">Chicago Bears</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/cincinnati_bengals">Cincinnati Bengals</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/cleveland_browns">Cleveland Browns</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/dallas_cowboys">Dallas Cowboys</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/denver_broncos">Denver Broncos</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/detroit_lions">Detroit Lions</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/green_bay_packers">Green Bay Packers</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/houston_texans">Houston Texans</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/indianapolis_colts">Indianapolis Colts</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/jacksonville_jaguars">Jacksonville Jaguars</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/kansas_city_chiefs">Kansas City Chiefs</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/miami_dolphins">Miami Dolphins</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/minnesota_vikings">Minnesota Vikings</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/new_england_patriots">New England Patriots</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/new_orleans_saints">New Orleans Saints</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/new_york_giants">New York Giants</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/new_york_jets">New York Jets</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/oakland_raiders">Oakland Raiders</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/philadelphia_eagles">Philadelphia Eagles</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/pittsburgh_steelers">Pittsburgh Steelers</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/san_diego_chargers">San Diego Chargers</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/san_francisco_49ers">San Francisco 49ers</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/seattle_seahawks">Seattle Seahawks</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/st_louis_rams">St. Louis Rams</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/tampa_bay_buccaneers">Tampa Bay Buccaneers</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/tennessee_titans">Tennessee Titans</a></li>
					<li><a href="<?php echo base_url();?>index.php/site/washington_redskins">Washington Redskins</a></li>
				</ul>
		</li>
		<li><a href="<?php echo base_url();?>index.php/site/nba"><strong>NBA</strong></a>
			<ul>
				<li><a href="">Atlanta Anustapit<a></li>
				<li><a href="">Denver Dildot<a></li>
				<li><a href="">Boston Berseet<a></li>
				<li><a href="">Portland Pyllypojat<a></li>
				<li><a href="">Indiana Ilotytöt<a></li>
			</ul>
		</li>
		<li><a href="<?php echo base_url();?>index.php/site/nhl"><strong>NHL</strong></a>
			<ul>
				<li><a href="<?php echo base_url();?>index.php/site/anaheim_ducks">Anaheim Ducks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/calgary_flames">Calgary Flames</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/chicago_blackhawks">Chicago Blackhawks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/colorado_avalanche">Colorado Avalanche</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/dallas_stars">Dallas Stars</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/edmonton_oilers">Edmonton Oilers</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/los_angeles_kings">Los Angeles Kings</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/minnesota_wild">Anaheim Ducks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/nashville_predators">Nashville Predators</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/phoenix_coyotes">Phoenix Coyotes</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/san_jose_sharks">San Jose Sharks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/st_louis_blues">St Louis Blues</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/vancouver_canucks">Vancouver Canucks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/winnipeg_jets">Winnipeg Jets</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/boston_bruins">Boston Bruins</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/buffalo_sabres">Buffalo Sabres</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/carolina_hurricanes">Carolina Hurricanes</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/columbus_blue_jackets">Columbus Blue Jackets</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/florida_panthers">Florida Panthers</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/montreal_canadiens">Montreal Canadiens</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/new_jersey_devils">New Jersey Devils</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/new_york_islanders">New York Islanders</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/new_york_rangers">New York Rangers</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/ottawa_senators">Ottawa Senators</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/philadelphia_flyers">Philadelphia Flyers</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/pittsburgh_penguins">Pittsburgh Penguins</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/tampa_bay_lightning">Tampa Bay Lightning</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/toronto_maple_leafs">Toronto Maple Leafs</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/washington_capitals">Washington Capitals</a></li>
			</ul>
		</li>
		<li><a href=""><strong>Jokufutislol</strong></a>
			<ul>
				<li><a href="">Kakkapyllyt</a></li>
			</ul>
		</li>
	</ul>
	<ul id="filter-container" class="clearfix">
		<li><a href="">Uusimmat</a></li>
		<li><a href="">Suosituimmat</a></li>
		<li><a href="">Tykätyimmät</a></li>
		<li><a href="">Paheksutuimmat</a></li>
		<li><a href="">Kommentoiduimmat</a></li>
	</ul>