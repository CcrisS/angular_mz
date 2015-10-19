var app = angular.module("AngularMzApp", []);

// Filters
app.filter('currencyEU', function() {
    return function(amount) {
        if (!angular.isNumber(amount)) { return ''; }
        return amount.toFixed(2) + '€';
    };
});