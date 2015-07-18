/* global Firebase */

'use strict';

angular.module('sportsFeed')
.controller('NhlCtrl', function ($scope, $firebase) {

  $scope.firebaseRef = new Firebase('https://dazzling-fire-5200.firebaseio.com/');

  var mlbReference = $scope.firebaseRef.child('nhl').child('teamsMixed');
  var mlbObject = $firebase(mlbReference).$asObject();
  mlbObject.$bindTo($scope, 'nhl');

});