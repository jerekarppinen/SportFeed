/* global Firebase */

'use strict';

angular.module('sportsFeed')
.controller('MlbCtrl', function ($scope, $firebase) {

	$scope.firebaseRef = new Firebase('https://dazzling-fire-5200.firebaseio.com/');

	var mlbReference = $scope.firebaseRef.child('mlb').child('teamsMixed');
	var mlbObject = $firebase(mlbReference).$asObject();
	mlbObject.$bindTo($scope, 'mlb');
});
