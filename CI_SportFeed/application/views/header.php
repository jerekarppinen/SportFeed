<!DOCTYPE HTML>
<html ng-app="SFApp">
<head>
<link href='http://fonts.googleapis.com/css?family=Muli:300,400|Open+Sans:300' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/jquery.203.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/jquery-ui-1.11.0.custom/jquery-ui.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>application/libraries/jquery-ui-1.11.0.custom/jquery-ui.min.css"> 

<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/masonry.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/libraries/angular-resource.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/application/js/sportFeed.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/application/js/effects.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>application/css/styles.css">

<title>Sportster!</title>
<script type="text/javascript">
	$(document).ready(function() { 
		$('#wrapper').masonry({
		  // options
		  columnWidth: 200,
		  itemSelector: '.item'
		});

		$('.registerlink').on('click',function(e) {
			e.preventDefault();

			$('#registerbox').dialog({
				modal: true,
				resizable: false,
				draggable: false,
				show: { effect: 'clip', duration:300},
				hide: { effect: 'clip', duration:300},
				open: function() {
					$('.ui-widget-overlay').on('click',function(e) {
						$('#registerbox').dialog('close');
					})
				}
			});
		});
		
	});
</script>

</head>
<body ng-controller="AppCtrl">

<div id="header"> 

	<h1 id="bannertext"><a href="<?php echo base_url();?>index.php/site/index/">Sports Lounge</a></h1>
	
	<ul id="navbox" class="clearfix">
		<li class="mlb"><a class="navlink" data-url="<?php echo base_url();?>index.php/site/index/mlb" ng-click="getFeed($event)">MLB</a>
			<div class="teamscontainer">
				<ul ng-repeat="conference in mlb.conferences" class="conferenceholder">
					<li class="conferencename"><strong>{{conference.text}}</strong></li>
					<li class="divisionsholder clearfix">
						<ul ng-repeat="division in conference.divisions" class="divisions">
							<li class="divisionname"><strong>{{division.name}}</strong></li>
							<li ng-repeat="item in division.teams" class="teamname"><a class="navsublink" data-url="<?php echo base_url();?>{{item.url}}" ng-click="getFeed($event)">{{item.team}}</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</li>
		<li class="nfl"><a class="navlink" data-url="<?php echo base_url();?>index.php/site/index/nfl" ng-click="getFeed($event)">NFL</a>
			<div class="teamscontainer">
				<ul ng-repeat="conference in nfl.conferences" class="conferenceholder">
					<li class="conferencename"><strong>{{conference.text}}</strong></li>
					<li class="divisionsholder clearfix">
						<ul ng-repeat="division in conference.divisions" class="divisions">
							<li class="divisionname"><strong>{{division.name}}</strong></li>
							<li ng-repeat="item in division.teams" class="teamname"><a class="navsublink" data-url="<?php echo base_url();?>{{item.url}}" ng-click="getFeed($event)">{{item.team}}</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</li>

		<li class="nba"><a class="navlink" data-url="<?php echo base_url();?>index.php/site/index/nba" ng-click="getFeed($event)">NBA</a>
			<div class="teamscontainer">
				<ul ng-repeat="conference in nba.conferences" class="conferenceholder">
					<li class="conferencename"><strong>{{conference.text}}</strong></li>
					<li class="divisionsholder clearfix">
						<ul ng-repeat="division in conference.divisions" class="divisions">
							<li class="divisionname"><strong>{{division.name}}</strong></li>
							<li ng-repeat="item in division.teams" class="teamname"><a class="navsublink" data-url="<?php echo base_url();?>{{item.url}}" ng-click="getFeed($event)">{{item.team}}</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</li>
		<li class="nhl"><a class="navlink" data-url="<?php echo base_url();?>index.php/site/index/nhl" ng-click="getFeed($event)">NHL</a>
			<div class="teamscontainer">
				<ul ng-repeat="conference in nhl.conferences" class="conferenceholder">
					<li class="conferencename"><strong>{{conference.text}}</strong></li>
					<li class="divisionsholder clearfix">
						<ul ng-repeat="division in conference.divisions" class="divisions">
							<li class="divisionname"><strong>{{division.name}}</strong></li>
							<li ng-repeat="item in division.teams" class="teamname"><a class="navsublink" data-url="<?php echo base_url();?>{{item.url}}" ng-click="getFeed($event)">{{item.team}}</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</li>
	</ul>

	<!--<ul id="filter-container" class="clearfix">
		<li><a href="">Uusimmat</a></li>
		<li><a href="">Suosituimmat</a></li>
		<li><a href="">Tykätyimmät</a></li>
		<li><a href="">Paheksutuimmat</a></li>
		<li><a href="">Kommentoiduimmat</a></li>
	</ul>-->


	<form id="loginControl" ng-submit="login.submitForm($event)">
		<input name="username" ng-model="login.username" type="text"/>
		<br/>
		<input name="password" ng-model="login.password" type="password"/>
		<br/>
		<input type="submit" name="log" value="Log in"/>
		<br/>
		<a class="registerlink">Register</a>
	</form>

</div>
<?php include("view_register.php"); ?>
<div id="wrapper" class="js-masonry clearfix">