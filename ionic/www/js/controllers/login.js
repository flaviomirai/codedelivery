angular.module('starter.controllers')
    .controller('LoginCtrl', [
        '$scope','OAuth','OAuthToken','$state', '$ionicPopup', 'UserData', 'User', '$localStorage',
        function($scope, OAuth, OAuthToken,  $state,$ionicPopup, UserData, User, $localStorage){
        $scope.user = {
            username: '',
            password: ''
        };


            $scope.login = function(){

                var promise = OAuth.getAccessToken($scope.user);
                    promise
                        .then(function(data){
                            var token = $localStorage.get('device_token');
                            return User.updateDeviceToken({},{device_token: token}).$promise;
                        })
                        .then(function(data){
                            return User.authenticated({include:'client'}).$promise;
                        })
                        .then(function(data){
                            //console.log(data.data);
                            UserData.set(data.data);
                            $state.go('client.checkout');
                        }, function(responseError){
                            $userData.set(null);
                            OAuthToken.removeToken();
                            $ionicPopup.alert({
                                title: 'Advertência',
                                template: 'Login e/ou senha inválidos'
                            });
                            console.debug(responseError);
                        });
                    };

    }]);