app.controller('GridController', ['$scope', 'products', function($scope, products) { 

    // Load products
    $scope.items = [];
    products.success(function(data){ $scope.items = data; });
    products.error(function(data){ $scope.errorMessage = data; });

    $scope.init = function(){
        $(function() {

            /**
             * FreeWall: http://vnjs.net/www/project/freewall/
             */ 
            var wall = new Freewall("#jMainGrid");
            wall.reset({
                selector: '.brick',
                animate: true,
                delay: 30,
                cellH: 'auto',
                // cellW: 'auto',
                fixSize: 1,
                // cacheSize: true,
                // keepOrder: true,
                onResize: function() {
                    wall.fitWidth();
                }
            });

            // wall fitWidth function - with images
            var totalImages = 0;
            var imgsInterval = setInterval(function(){ 
                if(totalImages > 0){
                    wall.fitWidth();
                    clearInterval(imgsInterval);
                } else {
                    totalImages = $("#jMainGrid .brick .productImg").length;
                }
            }, 500);

            // wall.fitWidth(); // without images
        });
    };

}]);