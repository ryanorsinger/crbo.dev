function CpusController($scope, $http) {

	$http.get('/cpus').success(function(cpus) {

		$scope.cpus = cpus;

	});



	$scope.addCpu = function()  {
		var cpu = {
			make: $scope.newCpuMake
			model: $scope.newCpuModel
			number_of_cores: $scope.newCpuNumberCores
			speed: $scope.newCpuSpeed
			price:$scope.newCpuPrice

		};

		$scope.cpus.push(cpu);

		$http.post('/cpus', cpu);

	}



}