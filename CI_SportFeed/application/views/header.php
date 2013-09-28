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
		<a href="">Register</a><br/><br/>
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
					<li><a href="">Arizona Cardinals</a></li>
					<li><a href="">Atlanta Falcons</a></li>
					<li><a href="">Baltimore Ravens</a></li>
					<li><a href="">Buffalo Bills</a></li>
					<li><a href="">Carolina Panthers</a></li>
					<li><a href="">Chicago Bears</a></li>
					<li><a href="">Cincinnati Bengals</a></li>
					<li><a href="">Cleveland Browns</a></li>
					<li><a href="">Dallas Cowboys</a></li>
					<li><a href="">Denver Broncos</a></li>
					<li><a href="">Detroit Lions</a></li>
					<li><a href="">Green Bay Packers</a></li>
					<li><a href="">Houston Texans</a></li>
					<li><a href="">Indianapolis Colts</a></li>
					<li><a href="">Jacksonville Jaguars</a></li>
					<li><a href="">Kansas City Chiefs</a></li>
					<li><a href="">Miami Dolphins</a></li>
					<li><a href="">Minnesota Vikings</a></li>
					<li><a href="">New England Patriots</a></li>
					<li><a href="">New Orleans Saints</a></li>
					<li><a href="">New York Giants</a></li>
					<li><a href="">New York Jets</a></li>
					<li><a href="">Oakland Raiders</a></li>
					<li><a href="">Philadelphia Eagles</a></li>
					<li><a href="">Pittsburgh Steelers</a></li>
					<li><a href="">San Diego Chargers</a></li>
					<li><a href="">San Fransisco 49ers</a></li>
					<li><a href="">Seattle Seahawks</a></li>
					<li><a href="">St. Louis Rams</a></li>
					<li><a href="">Tampa Bay Buccaneers</a></li>
					<li><a href="">Tennessee Titans</a></li>
					<li><a href="">Washington Redskins</a></li>
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
		<li><a href="<?php echo base_url();?>index.php/site/nhl"><strong>NHL</strong></a></li>
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