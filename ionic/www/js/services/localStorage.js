angular.module('starter.services')
.factory('$localStorage', ['$window', function($window){
        return {
            set: function(key,value){
                $window.localStorage[key] = value;
                return $window.localStorage[key];
            },
            get: function(key,defaultValue){
                return $window.localStorage[key] || defaultValue;
                // se existir retorna o valor senão retorna o defaultValue
            },
            setObject: function (key,value) {
                $window.localStorage[key] = JSON.stringify(value);
                return this.getObject(key);
            },
            getObject: function(key){
                //var item = JSON.parse($window.localStorage[key] || null);

                return JSON.parse($window.localStorage[key] || null);

               // return item;
            }
        }

    }]);