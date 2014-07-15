 var SFApp = angular.module('SFApp', ['ngResource']);
 SFApp.controller('AppCtrl', function AppCtrl($scope) {
 
	var mlb = { conferences : {
							 	al: { text: 'American League', divisions: {
									east:{name: 'East', teams:
									[
									{team:'Baltimore Orioles', url:'index.php/site/index/mlb/bal'},
									{team:'Boston Red Sox', url:'index.php/site/index/mlb/bos'},
									{team:'New York Yankees', url:'index.php/site/index/mlb/nyy'},
									{team:'Tampa Bay Rays', url:'index.php/site/index/mlb/tb'},
									{team:'Toronto Blue Jays', url:'index.php/site/index/mlb/tor'}]},

									central:{name: 'Central', teams:
									[
									{team:'Chicago White Sox', url:'index.php/site/index/mlb/cws'},
									{team:'Cleveland Indians', url:'index.php/site/index/mlb/cle'},
									{team:'Detroit Tigers', url:'index.php/site/index/mlb/det'},
									{team:'Kansas City Royals', url:'index.php/site/index/mlb/kc'},
									{team:'Minnesota Twins', url:'index.php/site/index/mlb/min'}]},

									west:{name: 'West', teams:
									[
									{team:'Houston Astros', url:'index.php/site/index/mlb/hou'},
									{team:'Los Angeles Angels of Anaheim', url:'index.php/site/index/mlb/ana'},
									{team:'Oakland Athletics', url:'index.php/site/index/mlb/oak'},
									{team:'Seattle Mariners', url:'index.php/site/index/mlb/sea'},
									{team:'Texas Rangers', url:'index.php/site/index/mlb/tex'}]}}},

								nl: { text: 'National League', divisions: {
									east:{name: 'East', teams:
									[
									{team:'Atlanta Braves', url:'index.php/site/index/mlb/atl'},
									{team:'Miami Marlins', url:'index.php/site/index/mlb/mia'},
									{team:'New York Mets', url:'index.php/site/index/mlb/nym'},
									{team:'Philadelphia Phillies', url:'index.php/site/index/mlb/phi'},
									{team:'Washington Nationals', url:'index.php/site/index/mlb/was'}]},

									central:{name: 'Central', teams:
									[
									{team:'Chicago Cubs', url:'index.php/site/index/mlb/chc'},
									{team:'Cincinnati Reds', url:'index.php/site/index/mlb/cin'},
									{team:'Milwaukee Brewers', url:'index.php/site/index/mlb/mil'},
									{team:'Pittsburgh Pirates', url:'index.php/site/index/mlb/pit'},
									{team:'St Louis Cardinals', url:'index.php/site/index/mlb/stl'}]},

									west:{name: 'West', teams:
									[
									{team:'Arizona Diamondbacks', url:'index.php/site/index/mlb/ari'},
									{team:'Colorado Rockies', url:'index.php/site/index/mlb/col'},
									{team:'Los Angeles Dodgers', url:'index.php/site/index/mlb/la'},
									{team:'San Diego Padres', url:'index.php/site/index/mlb/sd'},
									{team:'San Francisco Giants', url:'index.php/site/index/mlb/sf'}]}}}
							} };
	$scope.mlb = mlb;
	
	var nfl = { conferences : { 
								afc : { text:"American Conference", divisions: {

									east: { name: "AFC East Team", teams:
									[
									{team:"New England Patriots", url:"index.php/site/index/nfl/ne"},
									{team:"Miami Dolphins", url:"index.php/site/index/nfl/mia"},
									{team:"New York Jets", url:"index.php/site/index/nfl/nyj"},
									{team:"Buffalo Bills", url:"index.php/site/index/nfl/buf"}]},

									north: { name: "AFC North team", teams:
									[
									{team:"Cincinnati Bengals", url:"index.php/site/index/nfl/cin"},
									{team:"Pittsburgh Steelers", url:"index.php/site/index/nfl/pit"},
									{team:"Baltimore Ravens", url:"index.php/site/index/nfl/bal"},
									{team:"Cleveland Browns", url:"index.php/site/index/nfl/clv"}]},

									south: { name: "AFC South team", teams:
									[
									{team:"Indianapolis Colts", url:"index.php/site/index/nfl/ind"},
									{team:"Houston Texans", url:"index.php/site/index/nfl/hou"},
									{team:"Tennessee Titans", url:"index.php/site/index/nfl/ten"},
									{team:"Jacksonville Jaguars", url:"index.php/site/index/nfl/jax"}]},

									west: { name: "AFC West team", teams:
									[
									{team:"Kansas City Chiefs", url:"index.php/site/index/nfl/nc"},
									{team:"Denver Broncos", url:"index.php/site/index/nfl/den"},
									{team:"San Diego Chargers", url:"index.php/site/index/nfl/sd"},
									{team:"Oakland Raiders", url:"index.php/site/index/nfl/oak"}]}}}, 

								nfc : { text:"National Conference", divisions: {

									east: { name: "NFC East team", teams:
									[
									{team:"Philadelphia Eagles", url:"index.php/site/index/nfl/phi"},
									{team:"Dallas Cowboys", url:"index.php/site/index/nfl/dal"},
									{team:"Washington Redskins", url:"index.php/site/index/nfl/was"},
									{team:"New York Giants", url:"index.php/site/index/nfl/nyg"}]},

									north: { name: "NFC North team", teams:
									[
									{team:"Detroit Lions", url:"index.php/site/index/nfl/det"},
									{team:"Chicago Bears", url:"index.php/site/index/nfl/chi"},
									{team:"Green Bay Packers", url:"index.php/site/index/nfl/gb"},
									{team:"Minnesota Vikings", url:"index.php/site/index/nfl/min"}]},

									south: { name: "NFC South team", teams:
									[
									{team:"New Orleans Saints", url:"index.php/site/index/nfl/no"},
									{team:"Tampa Bay Buccaneers", url:"index.php/site/index/nfl/tb"},
									{team:"Carolina Panthers", url:"index.php/site/index/nfl/car"},
									{team:"Atlanta Falcons", url:"index.php/site/index/nfl/atl"}]},

									west: { name: "NFC West team", teams:
									[
									{team:"St. Louis Rams", url:"index.php/site/index/nfl/stl"},
									{team:"San Francisco 49ers", url:"index.php/site/index/nfl/sf"},
									{team:"Seattle Seahawks", url:"index.php/site/index/nfl/sea"},
									{team:"Arizona Cardinals", url:"index.php/site/index/nfl/arz"}]}}}
							} };
	$scope.nfl = nfl;

	var nba = { conferences : { ec : { text:"Eastern Conference", divisions: {atlantic: { name: "Atlantic", teams: [{team:"Boston Celtics", url:"index.php/site/nbateam?abbr=celtics"},{team:"Brooklyn Nets", url:"index.php/site/nbateam?abbr=nets"},{team:"New York Knicks", url:"index.php/site/nbateam?abbr=knicks"},{team:"Philadelphia 76ers", url:"index.php/site/nbateam?abbr=sixers"},{team:"Toronto Raptors", url:"index.php/site/nbateam?abbr=raptors"}]},central: { name: "Central", teams: [{team:"Chicago Bulls", url:"index.php/site/nbateam?abbr=bulls"},{team:"Cleveland Cavaliers", url:"index.php/site/nbateam?abbr=cavaliers"},{team:"Detroit Pistons", url:"index.php/site/nbateam?abbr=pistons"},{team:"Indiana Pacers", url:"index.php/site/nbateam?abbr=pacers"},{team:"Milwaukee Bucks", url:"index.php/site/nbateam?abbr=bucks"}]},southeast: { name: "Southeast", teams: [{team:"Atlanta Hawks", url:"index.php/site/nbateam?abbr=hawks"},{team:"Charlotte Hornets", url:"index.php/site/nbateam?abbr=hornets"},{team:"Miami Heat", url:"index.php/site/nbateam?abbr=heat"},{team:"Orlando Magic", url:"index.php/site/nbateam?abbr=magic"},{team:"Washington Wizards", url:"index.php/site/nbateam?abbr=wizards"}]}}}, wc : { text:"Western Conference", divisions: {southwest: { name: "Southwest", teams: [{team:"Dallas Mavericks", url:"index.php/site/nbateam?abbr=mavericks"},{team:"Houston Rockets", url:"index.php/site/nbateam?abbr=rockets"},{team:"Memphis Grizzlies", url:"index.php/site/nbateam?abbr=grizzlies"},{team:"New Orleans Pelicans", url:"index.php/site/nbateam?abbr=pelicans"},{team:"San Antonio Spurs", url:"index.php/site/nbateam?abbr=spurs"}]},northwest: { name: "Northwest", teams: [{team:"Denver Nuggets", url:"index.php/site/nbateam?abbr=nuggets"},{team:"Minnesota Timberwolves", url:"index.php/site/nbateam?abbr=timberwolves"},{team:"Oklahoma City Thunder", url:"index.php/site/nbateam?abbr=thunder"},{team:"Portland Trail Blazers", url:"index.php/site/nbateam?abbr=blazers"},{team:"Utah Jazz", url:"index.php/site/nbateam?abbr=jazz"}]},pacific: { name: "Pacific", teams: [{team:"Golden State Warriors", url:"index.php/site/nbateam?abbr=warriors"},{team:"Los Angeles Clippers", url:"index.php/site/nbateam?abbr=clippers"},{team:"Los Angeles Lakers", url:"index.php/site/nbateam?abbr=lakers"},{team:"Phoenix Suns", url:"index.php/site/nbateam?abbr=suns"},{team:"Sacramento Kings", url:"index.php/site/nbateam?abbr=kings"}]}}} } };
	$scope.nba = nba;
	
	var nhl = {};
	
	
 });