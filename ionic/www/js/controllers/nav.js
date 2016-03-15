angular.module('starter.controllers')
    .controller('NavCtrl', [
        '$scope','$state' , function($scope, $state){
            alert('flavio');

            $scope.openLista = function(){
                $state.go('client.view_products');
            }


        }]);