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
<div id="bannerHolder"> 
	<a id="banner" href="<?php echo base_url();?>index.php/site/"></a> 
	<div id="loginControl" class="clearfix"> 
		<a href="">Register</a><br/><br/>
		<form method="post"><input type="text"/><br/><input type="password"/><br/><input type="submit" name="log" value="Log in"/></form>
	</div>
</div>
<div id="wrapper" class="clearfix">
	<ul id="navbox" class="clearfix">
		<li><a href="<?php echo base_url();?>index.php/site/"><strong>Etusivu</strong></a></li>
		<li><a href="<?php echo base_url();?>index.php/site/mlb"><strong>MLB</strong></a></li>
		<li><a href="<?php echo base_url();?>index.php/site/nfl"><strong>NFL</strong></a></li>
		<li><a href="<?php echo base_url();?>index.php/site/nba"><strong>NBA</strong></a></li>
		<li><a href="<?php echo base_url();?>index.php/site/nhl"><strong>NHL</strong></a></li>
		<li><a href=""><strong>Jokufutislol</strong></a></li>
	</ul>
	<ul id="filter-container" class="clearfix">
		<li><a href="">Uusimmat</a></li>
		<li><a href="">Suosituimmat</a></li>
		<li><a href="">Tykätyimmät</a></li>
		<li><a href="">Paheksutuimmat</a></li>
		<li><a href="">Kommentoiduimmat</a></li>
	</ul>