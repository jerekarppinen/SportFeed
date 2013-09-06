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
<a id="banner" href="index.php"></a>
<div id="wrapper" class="clearfix">
	<ul id="navbox" class="clearfix">
		<li><a href="">Etusivu</a></li>
		<li><a href="<?php echo base_url();?>index.php/site/mlb">MLB</a></li>
		<li><a href="<?php echo base_url();?>index.php/site/nfl">NFL</a></li>
		<li><a href="<?php echo base_url();?>index.php/site/nba">NBA</a></li>
		<li><a href="<?php echo base_url();?>index.php/site/nhl">NHL</a></li>
		<li><a href="">Jokufutislol</a></li>
	</ul>
	<ul id="filter-container" class="clearfix">
		<li><a href="">Uusimmat</a></li>
		<li><a href="">Suosituimmat</a></li>
		<li><a href="">Tyk�tyimm�t</a></li>
		<li><a href="">Paheksutuimmat</a></li>
		<li><a href="">Kommentoiduimmat</a></li>
	</ul>