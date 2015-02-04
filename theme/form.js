var app = angular.module("myApp", []);
app.controller("MainCtrl", ['$scope' ,function($scope) {
	$scope.PCode = "OG";
	$scope.Size = "大杯";
	$scope.Ice = "去冰";
	$scope.Sugar = "半糖";
	$scope.Amount = 1;
}]);
app.controller("MainCtrl2", ['$scope' ,function($scope) {
	$scope.PCode = "OG";
	$scope.Size = "大杯";
	$scope.Ice = "去冰";
	$scope.Sugar = "半糖";
	$scope.Amount = 1;
}]);