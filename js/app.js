angular.module('facturas',[])

.controller('Ctrl', ['$scope', function ($scope) {
	$scope.test = "Hola Mundo";

	$scope.list = [
		'verde',
		'rojo',
		'azul'
	];
}])

.directive('consulta', [function () {
	return {
		restrict: 'AEC',
		link: function (scope, el, attr) {
			
		},
		controller : 'MainCtrl'
	};
}])

.controller('MainCtrl', ['$scope', function ($scope) {
	$scope.send = function(){
		$scope.toolChange = 'toolbar';
	};

	$scope.back = function(){
		$scope.toolChange = '';
	};
}])

;