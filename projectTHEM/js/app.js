/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

'use strict';
var projectTHEM = angular.module('projectTHEM', ['ngRoute']);

projectTHEM.config(['$routeProvider',
    function ($routeProvider){
        $routeProvider.when('/sightings',{
                templateUrl:'partials/sightings-list.html',
                controller:'viewSightings'
        })
                .when('/sightings/:sightingID',{
                templateUrl: '/projectTHEM/partials/sightings-details.html',
                controller: 'viewSightingDetails'
        })
                .otherwise({
            redirectTo:'/sightings'
        });
    }]);

projectTHEM.controller('viewSightings', ['$scope', '$http', '$location', function($scope, $http, $location) {
                
        $scope.filterHistory = [];
             
        $scope.resetFilter = function(){
            $scope.filterHistory.push($scope.filterText);
            $scope.filterText = "";  
        };
        
        //Function to navigate to details page
        $scope.go = function(path) {
            $location.path(path);
        };
                
        $http.get("/projectTHEM/services/cryptids.php")
                .then(function (response){
                    $scope.sightings=response.data;
        }
                , function errorCallback(response) {
                    $scope.error = response.data;
                }); 
        
}]);

projectTHEM.controller('viewSightingDetails',['$scope', '$http', '$routeParams',
    function($scope, $http, $routeParams){
        var sightingID = $routeParams.sightingID;
        
        $http.get("/projectTHEM/services/cryptids.php", {params: {"id": sightingID}})
                .then(function (response){
                    $scope.sighting=response.data;
        }
               , function errorCallback(response) {
                    $scope.error = response.data;
                }
                );
        
        $scope.sightingID = sightingID;
    }]);
