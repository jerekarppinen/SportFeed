/* global Firebase */

'use strict';

angular.module('sportsFeed')
.controller('NbaCtrl', function ($scope, $firebase) {

  $scope.firebaseRef = new Firebase('https://dazzling-fire-5200.firebaseio.com/');

  var mlbReference = $scope.firebaseRef.child('nba').child('teamsMixed');
  var mlbObject = $firebase(mlbReference).$asObject();
  mlbObject.$bindTo($scope, 'nba');

});
