'use strict';

angular.module('sportsFeed', [
	'firebase',
	'ui.router',
	])
.config(function($stateProvider, $urlRouterProvider){
	$stateProvider
	.state('mlb', {
		url: '/mlb',
		templateUrl: 'partials/mlb.html',
		controller: 'MlbCtrl',
	})
	.state('nba', {
		url: '/nba',
		templateUrl: 'partials/nba.html',
		controller: 'NbaCtrl',
	})
	.state('nfl', {
		url: '/nfl',
		templateUrl: 'partials/nfl.html',
		controller: 'NflCtrl',
	})
	.state('nhl', {
		url: '/nhl',
		templateUrl: 'partials/nhl.html',
		controller: 'NhlCtrl',
	})
})
.run(function($state){
	$state.transitionTo('mlb');
});