app.factory('products', ['$http', function($http) { 

    return $http.get('/angular_mz/src/Client.php') 
        .success(function(data) { 
            return data; 
        }) 
        .error(function(err) { 
            return err; 
        })
    ; 

}]);