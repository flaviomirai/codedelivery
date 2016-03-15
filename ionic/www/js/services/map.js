angular.module('starter.services')
.factory('$map', function(){
        var key = 'user';
        return  {
            center: {
                latitude:  0, //-21.1970154,
                longitude: 0//-42.6142394
            },
            zoom: 12
        };
    });