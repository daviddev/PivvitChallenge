var app = angular.module('app', []);

app.controller('ctrl', function($scope, $http) {
    
	$scope.purchase = {};

	$http.get('/offerings').then(function (response) {
    	$scope.offerings = response.data.offerings;
	});

	$scope.calculateTotal = function () {
		if ($scope.purchase.offering_id != '' && $scope.purchase.quantity != '')
		{
			angular.forEach($scope.offerings, function (value, key) {
				if (value.id == $scope.purchase.offering_id) {
					$scope.purchase.total = value.price * $scope.purchase.quantity;
				}
			})
		}
	}

    $scope.createPurchase = function () {
    	$http.post('/purchases', $scope.purchase).then(function (response) {
    		location.href = '/purchases';
    	});
    }
});