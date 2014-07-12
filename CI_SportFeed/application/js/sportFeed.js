 var SFApp = angular.module('SFApp', ['ngResource']);
 SFApp.controller('AppCtrl', function AppCtrl($scope) {
 
	//list different sports' teams here
	var mlbAL = { text: 'American League', divisions: {
					east:{name: 'East', teams: [{team:'Baltimore Orioles', url:'index.php/site/getMLBTeam?abbr=bal'}, {team:'Boston Red Sox', url:'index.php/site/boston_red_sox'}, {team:'New York Yankees', url:'index.php/site/new_york_yankees'}, {team:'Tampa Bay Rays', url:'index.php/site/tampa_bay_rays'}, {team:'Toronto Blue Jays', url:'index.php/site/toronto_blue_jays'}]}, 
					central:{name: 'Central', teams: [{team:'Chicago White Sox', url:'index.php/site/chicago_white_sox'}, {team:'Cleveland Indians', url:'index.php/site/cleveland_indians'}, {team:'Detroit Tigers', url:'index.php/site/detroit_tigers'}, {team:'Kansas City Royals', url:'index.php/site/kansas_city_royals'}, {team:'Minnesota Twins', url:'index.php/site/minnesota_twins'}]}, 
					west:{name: 'West', teams: [{team:'Houston Astros', url:'index.php/site/houston_astros'}, {team:'Los Angeles Angels of Anaheim', url:'index.php/site/angels_of_anaheim'}, {team:'Oakland Athletics', url:'index.php/site/oakland_athletics'}, {team:'Seattle Mariners', url:'index.php/site/seattle_mariners'}, {team:'Texas Rangers', url:'index.php/site/texas_rangers'}]}}};
	$scope.mlbAL = mlbAL;
	//console.log(mlbAL.divisions.east);
	var mlbNL = { text: 'American League', divisions: {
					east:[{team:'Atlanta Braves', url:'index.php/site/atlanta_braves'}, {team:'Miami Marlins', url:'index.php/site/miami_marlins'}, {team:'New York Mets', url:'index.php/site/new_york_mets'}, {team:'Philadelphia Phillies', url:'index.php/site/philadelphia_phillies'}, {team:'Washington Nationals', url:'index.php/site/washington_nationals'}],
					central:[{team:'Chicago Cubs', url:'index.php/site/chicago_cubs'}, {team:'Cincinnati Reds', url:'index.php/site/cincinnati_reds'}, {team:'Milwaukee Brewers', url:'index.php/site/milwaukee_brewers'}, {team:'Pittsburgh Pirates', url:'index.php/site/pittsburgh_pirates'}, {team:'St Louis Cardinals', url:'index.php/site/st_louis_cardinals'}],
					west:[{team:'Arizona Diamondbacks', url:'index.php/site/arizona_diamondbacks'}, {team:'Colorado Rockies', url:'index.php/site/colorado_rockies'}, {team:'Los Angeles Dodgers', url:'index.php/site/los_angeles_dodgers'}, {team:'San Diego Padres', url:'index.php/site/san_diego_padres'}, {team:'San Francisco Giants', url:'index.php/site/san_francisco_giants'}]}};
	$scope.mlbNL = mlbNL;
	
	var nflTeams = [];
	
	var nbaTeams = [];
	
	var nhlTeams = [];
	
	
 });