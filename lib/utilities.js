// controllers

// form controller

myApp.controller('formController', function($scope, $http){
	// store our form data in this object 
	 $scope.closeMsg = function(){
	  $scope.showMessage = false;
	 };
	$scope.formData = {};
	// function to process the form
	$scope.processForm = function(formData){
		$http({
			method: 'POST',
			url: 'controller/insert.php',
			data: $scope.formData,
		}).then(function(data){
			if(data.data.error != null){
				console.log(data);
				$scope.showMessage = true;
				$scope.alertMessage = data.data.error;
			}else{
				console.log(data);
				console.log('hello');
				$scope.formData = {};
				window.location.replace("view/home.html.php");
			}
		});
	};
});