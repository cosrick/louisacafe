var app = angular.module("myApp", []);
app.controller("MainCtrl", ['$scope' ,function($scope) {
	$scope.Price = new Array(35,40,45,45,45,50,55,55,60,65,65,65,65,65,65,65,35,40,45,50,50,50,50,35,35,35,35,35,35,40,49,45,55,65,25,25,25,35,35,35,35,35,40,40,40);
	$scope.Pnum = 0;
	$scope.Ice = "去冰";
	$scope.Sugar = "半糖";
	$scope.Amount = 1;

	$scope.carts = [];
	$scope.add = function(){
    	$scope.carts.push({
     		Pnum: $scope.Pnum,
     		Ice: $scope.Ice,
    	 	Sugar: $scope.Sugar,
    	  	Amount: $scope.Amount,
    	  	Money: $scope.Price[$scope.Pnum-1]
   		});
	};

	$scope.subtotal = function(Amount,Money){
    	var result = Amount*Money;
    	return result;
	};

	$scope.sum = function(){
    var result = 0;
    for (var i in $scope.carts){
      result += $scope.subtotal($scope.carts[i].Amount,$scope.carts[i].Money);
    }
    return result;
  };
}]);
