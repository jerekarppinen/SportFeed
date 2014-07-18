<!DOCTYPE HTML>
<html ng-app="SFApp">
<head>
<link rel="stylesheet" href="<?php echo base_url();?>application/css/styles.css"> 
<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/jquery.203.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/masonry.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/angular-resource.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/application/js/sportFeed.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/js/effects.js"></script>

<title>Sportster!</title>
<script type="text/javascript">
	$(document).ready(function() { 
		var contti = $('#news-container');
		contti.masonry({
		  // options
		  columnWidth: 200,
		  itemSelector: '.item'
		});
	});
</script>

</head>
<body ng-controller="AppCtrl">

<div id="header"> 

	<h1 id="bannertext"><a href="<?php echo base_url();?>index.php/site/index/">Sports Lounge</a></h1>
	
	<ul id="navbox" class="clearfix">
		<li class="mlb"><a class="navlink" href="<?php echo base_url();?>index.php/site/index/mlb"><strong>MLB</strong></a>
			<div class="teamscontainer">
				<ul ng-repeat="conference in mlb.conferences" class="conferenceholder">
					<li class="conferencename"><strong>{{conference.text}}</strong></li>
					<li class="clearfix">
						<ul ng-repeat="division in conference.divisions" class="divisions">
							<strong>{{division.name}}</strong>
							<li ng-repeat="item in division.teams"><a href="<?php echo base_url();?>{{item.url}}">{{item.team}}</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</li>
		<li class="nfl"><a class="navlink" href="<?php echo base_url();?>index.php/site/index/nfl"><strong>NFL</strong></a>
			<div class="teamscontainer">
				<ul ng-repeat="conference in nfl.conferences" class="conferenceholder">
					<li class="conferencename"><strong>{{conference.text}}</strong></li>
					<li class="clearfix">
						<ul ng-repeat="division in conference.divisions" class="divisions">
							<strong>{{division.name}}</strong>
							<li ng-repeat="item in division.teams"><a href="<?php echo base_url();?>{{item.url}}">{{item.team}}</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</li>

		<li class="nba"><a class="navlink" href="<?php echo base_url();?>index.php/site/index/nba"><strong>NBA</strong></a>
			<div class="teamscontainer">
				<ul ng-repeat="conference in nba.conferences" class="conferenceholder">
					<li class="conferencename"><strong>{{conference.text}}</strong></li>
					<li class="clearfix">
						<ul ng-repeat="division in conference.divisions" class="divisions">
							<strong>{{division.name}}</strong>
							<li ng-repeat="item in division.teams"><a href="<?php echo base_url();?>{{item.url}}">{{item.team}}</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</li>
		<li><a class="navlink" href="<?php echo base_url();?>index.php/site/index/nhl"><strong>NHL</strong></a>
			<ul>
				<li><a href="<?php echo base_url();?>index.php/site/index/anaheim_ducks">Anaheim Ducks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/calgary_flames">Calgary Flames</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/chicago_blackhawks">Chicago Blackhawks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/colorado_avalanche">Colorado Avalanche</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/dallas_stars">Dallas Stars</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/edmonton_oilers">Edmonton Oilers</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/los_angeles_kings">Los Angeles Kings</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/minnesota_wild">Anaheim Ducks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/nashville_predators">Nashville Predators</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/phoenix_coyotes">Phoenix Coyotes</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/san_jose_sharks">San Jose Sharks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/st_louis_blues">St Louis Blues</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/vancouver_canucks">Vancouver Canucks</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/winnipeg_jets">Winnipeg Jets</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/boston_bruins">Boston Bruins</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/buffalo_sabres">Buffalo Sabres</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/carolina_hurricanes">Carolina Hurricanes</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/columbus_blue_jackets">Columbus Blue Jackets</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/florida_panthers">Florida Panthers</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/montreal_canadiens">Montreal Canadiens</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/new_jersey_devils">New Jersey Devils</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/new_york_islanders">New York Islanders</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/new_york_rangers">New York Rangers</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/ottawa_senators">Ottawa Senators</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/philadelphia_flyers">Philadelphia Flyers</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/pittsburgh_penguins">Pittsburgh Penguins</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/tampa_bay_lightning">Tampa Bay Lightning</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/toronto_maple_leafs">Toronto Maple Leafs</a></li>
				<li><a href="<?php echo base_url();?>index.php/site/index/washington_capitals">Washington Capitals</a></li>
			</ul>
		</li>
	</ul>

	<!--<ul id="filter-container" class="clearfix">
		<li><a href="">Uusimmat</a></li>
		<li><a href="">Suosituimmat</a></li>
		<li><a href="">Tykätyimmät</a></li>
		<li><a href="">Paheksutuimmat</a></li>
		<li><a href="">Kommentoiduimmat</a></li>
	</ul>-->


	<form id="loginControl" method="post"><input type="text"/><br/><input type="password"/>
		<br/>
		<input type="submit" name="log" value="Log in"/>
		<br/>
		<a href="<?php echo base_url();?>index.php/user">Register</a>
	</form>

</div>
<div id="wrapper" class="clearfix">
