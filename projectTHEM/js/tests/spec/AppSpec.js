/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Some testing deprecated due to addition of external PHP

describe('viewSightings', function(){
    beforeEach(module('projectTHEM'));
    
    var $controller;
    
    beforeEach(inject(function(_$controller_){
        $controller = _$controller_;
    }));
    
    
    describe('Sighting Controller', function(){
        /*it('sets usernames for sightings', function(){
            var $scope = {};
            var controller = $controller('viewSightings', {$scope: $scope});
            var list = $scope.sightings;
            expect(list[0].username).toEqual('YetiBoy2');
            expect(list[1].username).toEqual('WhatDoesTheMulderSay');
            expect(list[2].username).toEqual('CherryPie2Die4');
        });
      
        it('sets creatures for sightings', function(){
            var $scope = {};
            var controller = $controller('viewSightings', {$scope: $scope});
            expect($scope.sightings[0].creature).toEqual('Oklahoma Skunk Ape');
            expect($scope.sightings[1].creature).toEqual('Grey Alien');
            expect($scope.sightings[2].creature).toEqual('Ghost');
        });
        
        it('sets locations for sightings', function(){
            var $scope = {};
            var controller = $controller('viewSightings', {$scope: $scope});
            expect($scope.sightings[0].location).toEqual('I-35 near the Texas border');
            expect($scope.sightings[1].location).toEqual('Spaceship, Lower Ionosphere over Miami');
            expect($scope.sightings[2].location).toEqual('Roadside Diner, Twin Peaks, Washington');
        });
        
        it('sets evidences for sightings', function(){
            var $scope = {};
            var controller = $controller('viewSightings', {$scope: $scope});
            expect($scope.sightings[0].evidence).toEqual('none');
            expect($scope.sightings[1].evidence).toEqual('Clover shaped scar on shoulder');
            expect($scope.sightings[2].evidence).toEqual('Clues to a murder');
        });*/  
                
        it('clears filterText and pushes to filterHistory', function(){
            var $scope = {};
            var controller = $controller('viewSightings', {$scope: $scope});
            
            $scope.filterText = 'TestText'
            
            $scope.resetFilter();
            
            expect($scope.filterText).toEqual('');
            expect($scope.filterHistory[0]).toEqual('TestText');
        });
    });
    
    
    
});
