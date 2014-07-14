 var SFApp = angular.module('SFApp', ['ngResource']);
 SFApp.controller('AppCtrl', function AppCtrl($scope) {
 
	var mlb = { conferences : {
							 	al: { text: 'American League', divisions: {
									east:{name: 'East', teams: [{team:'Baltimore Orioles', url:'index.php/site/mlbteam?abbr=bal'}, {team:'Boston Red Sox', url:'index.php/site/mlbteam?abbr=bos'}, {team:'New York Yankees', url:'index.php/site/mlbteam?abbr=nyy'}, {team:'Tampa Bay Rays', url:'index.php/site/mlbteam?abbr=tb'}, {team:'Toronto Blue Jays', url:'index.php/site/mlbteam?abbr=tor'}]}, 
									central:{name: 'Central', teams: [{team:'Chicago White Sox', url:'index.php/site/mlbteam?abbr=cws'}, {team:'Cleveland Indians', url:'index.php/site/mlbteam?abbr=cle'}, {team:'Detroit Tigers', url:'index.php/site/mlbteam?abbr=det'}, {team:'Kansas City Royals', url:'index.php/site/mlbteam?abbr=kc'}, {team:'Minnesota Twins', url:'index.php/site/mlbteam?abbr=min'}]}, 
									west:{name: 'West', teams: [{team:'Houston Astros', url:'index.php/site/mlbteam?abbr=hou'}, {team:'Los Angeles Angels of Anaheim', url:'index.php/site/mlbteam?abbr=ana'}, {team:'Oakland Athletics', url:'index.php/site/mlbteam?abbr=oak'}, {team:'Seattle Mariners', url:'index.php/site/mlbteam?abbr=sea'}, {team:'Texas Rangers', url:'index.php/site/mlbteam?abbr=tex'}]}}},
								nl: { text: 'National League', divisions: {
									east:{name: 'East', teams: [{team:'Atlanta Braves', url:'index.php/site/mlbteam?abbr=atl'}, {team:'Miami Marlins', url:'index.php/site/mlbteam?abbr=mia'}, {team:'New York Mets', url:'index.php/site/mlbteam?abbr=nym'}, {team:'Philadelphia Phillies', url:'index.php/site/mlbteam?abbr=phi'}, {team:'Washington Nationals', url:'index.php/site/mlbteam?abbr=was'}]},
									central:{name: 'Central', teams: [{team:'Chicago Cubs', url:'index.php/site/mlbteam?abbr=chc'}, {team:'Cincinnati Reds', url:'index.php/site/mlbteam?abbr=cin'}, {team:'Milwaukee Brewers', url:'index.php/site/mlbteam?abbr=mil'}, {team:'Pittsburgh Pirates', url:'index.php/site/mlbteam?abbr=pit'}, {team:'St Louis Cardinals', url:'index.php/site/mlbteam?abbr=stl'}]},
									west:{name: 'West', teams: [{team:'Arizona Diamondbacks', url:'index.php/site/mlbteam?abbr=ari'}, {team:'Colorado Rockies', url:'index.php/site/mlbteam?abbr=col'}, {team:'Los Angeles Dodgers', url:'index.php/site/mlbteam?abbr=la'}, {team:'San Diego Padres', url:'index.php/site/mlbteam?abbr=sd'}, {team:'San Francisco Giants', url:'index.php/site/mlbteam?abbr=sf'}]}}}
							} };
	$scope.mlb = mlb;
	
	var nfl = { conferences : { 
								afc : { text:"American Conference", divisions: {
									east: { name: "AFC East Team", teams: [{team:"New England Patriots", url:"index.php/site/nflteam?abbr=ne"},{team:"Miami Dolphins", url:"index.php/site/nflteam?abbr=mia"},{team:"New York Jets", url:"index.php/site/nflteam?abbr=nyj"},{team:"Buffalo Bills", url:"index.php/site/nflteam?abbr=buf"}]},
									north: { name: "AFC North team", teams: [{team:"Cincinnati Bengals", url:"index.php/site/nflteam?abbr=cin"},{team:"Pittsburgh Steelers", url:"index.php/site/nflteam?abbr=pit"},{team:"Baltimore Ravens", url:"index.php/site/nflteam?abbr=bal"},{team:"Cleveland Browns", url:"index.php/site/nflteam?abbr=clv"}]},
									south: { name: "AFC South team", teams: [{team:"Indianapolis Colts", url:"index.php/site/nflteam?abbr=ind"},{team:"Houston Texans", url:"index.php/site/nflteam?abbr=hou"},{team:"Tennessee Titans", url:"index.php/site/nflteam?abbr=ten"},{team:"Jacksonville Jaguars", url:"index.php/site/nflteam?abbr=jax"}]},
									west: { name: "AFC West team", teams: [{team:"Kansas City Chiefs", url:"index.php/site/nflteam?abbr=nc"},{team:"Denver Broncos", url:"index.php/site/nflteam?abbr=den"},{team:"San Diego Chargers", url:"index.php/site/nflteam?abbr=sd"},{team:"Oakland Raiders", url:"index.php/site/nflteam?abbr=oak"}]}}}, 
								nfc : { text:"National Conference", divisions: {
									east: { name: "NFC East team", teams: [{team:"Philadelphia Eagles", url:"index.php/site/nflteam?abbr=phi"},{team:"Dallas Cowboys", url:"index.php/site/nflteam?abbr=dal"},{team:"Washington Redskins", url:"index.php/site/nflteam?abbr=was"},{team:"New York Giants", url:"index.php/site/nflteam?abbr=nyg"}]},
									north: { name: "NFC North team", teams: [{team:"Detroit Lions", url:"index.php/site/nflteam?abbr=det"},{team:"Chicago Bears", url:"index.php/site/nflteam?abbr=chi"},{team:"Green Bay Packers", url:"index.php/site/nflteam?abbr=gb"},{team:"Minnesota Vikings", url:"index.php/site/nflteam?abbr=min"}]},
									south: { name: "NFC South team", teams: [{team:"New Orleans Saints", url:"index.php/site/nflteam?abbr=no"},{team:"Tampa Bay Buccaneers", url:"index.php/site/nflteam?abbr=tb"},{team:"Carolina Panthers", url:"index.php/site/nflteam?abbr=car"},{team:"Atlanta Falcons", url:"index.php/site/nflteam?abbr=atl"}]},
									west: { name: "NFC West team", teams: [{team:"St. Louis Rams", url:"index.php/site/nflteam?abbr=stl"},{team:"San Francisco 49ers", url:"index.php/site/nflteam?abbr=sf"},{team:"Seattle Seahawks", url:"index.php/site/nflteam?abbr=sea"},{team:"Arizona Cardinals", url:"index.php/site/nflteam?abbr=arz"}]}}}
							} };
	$scope.nfl = nfl;

	var nba = {};
	
	var nhl = {};
	
	
 });