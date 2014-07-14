 var SFApp = angular.module('SFApp', ['ngResource']);
 SFApp.controller('AppCtrl', function AppCtrl($scope) {
 
	var mlb = { conferences : {
							 	al: { text: 'American League', divisions: {
									east:{name: 'East', teams: [{team:'Baltimore Orioles', url:'index.php/site/team?abbr=bal'}, {team:'Boston Red Sox', url:'index.php/site/team?abbr=bos'}, {team:'New York Yankees', url:'index.php/site/team?abbr=nyy'}, {team:'Tampa Bay Rays', url:'index.php/site/team?abbr=tb'}, {team:'Toronto Blue Jays', url:'index.php/site/team?abbr=tor'}]}, 
									central:{name: 'Central', teams: [{team:'Chicago White Sox', url:'index.php/site/team?abbr=cws'}, {team:'Cleveland Indians', url:'index.php/site/team?abbr=cle'}, {team:'Detroit Tigers', url:'index.php/site/team?abbr=det'}, {team:'Kansas City Royals', url:'index.php/site/team?abbr=kc'}, {team:'Minnesota Twins', url:'index.php/site/team?abbr=min'}]}, 
									west:{name: 'West', teams: [{team:'Houston Astros', url:'index.php/site/team?abbr=hou'}, {team:'Los Angeles Angels of Anaheim', url:'index.php/site/team?abbr=ana'}, {team:'Oakland Athletics', url:'index.php/site/team?abbr=oak'}, {team:'Seattle Mariners', url:'index.php/site/team?abbr=sea'}, {team:'Texas Rangers', url:'index.php/site/team?abbr=tex'}]}}},
								nl: { text: 'National League', divisions: {
									east:{name: 'East', teams: [{team:'Atlanta Braves', url:'index.php/site/team?abbr=atl'}, {team:'Miami Marlins', url:'index.php/site/team?abbr=mia'}, {team:'New York Mets', url:'index.php/site/team?abbr=nym'}, {team:'Philadelphia Phillies', url:'index.php/site/team?abbr=phi'}, {team:'Washington Nationals', url:'index.php/site/team?abbr=was'}]},
									central:{name: 'Central', teams: [{team:'Chicago Cubs', url:'index.php/site/team?abbr=chc'}, {team:'Cincinnati Reds', url:'index.php/site/team?abbr=cin'}, {team:'Milwaukee Brewers', url:'index.php/site/team?abbr=mil'}, {team:'Pittsburgh Pirates', url:'index.php/site/team?abbr=pit'}, {team:'St Louis Cardinals', url:'index.php/site/team?abbr=stl'}]},
									west:{name: 'West', teams: [{team:'Arizona Diamondbacks', url:'index.php/site/team?abbr=ari'}, {team:'Colorado Rockies', url:'index.php/site/team?abbr=col'}, {team:'Los Angeles Dodgers', url:'index.php/site/team?abbr=la'}, {team:'San Diego Padres', url:'index.php/site/team?abbr=sd'}, {team:'San Francisco Giants', url:'index.php/site/team?abbr=sf'}]}}}
							} };
	$scope.mlb = mlb;
	
	var nflTeams = {}
	
	var nbaTeams = {};
	
	var nhlTeams = {};
	
	
 });