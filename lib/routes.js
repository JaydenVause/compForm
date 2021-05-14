// routes

myApp.config(function($stateProvider, $urlRouterProvider, $locationProvider){
	$stateProvider

	// route to show our basic form
	.state('form', {
		url: '/form',
		templateUrl: 'templates/form.html',
		controller: 'formController'
	})

	// nested states
	// details state
	.state('form.details', {
		url: '/details',
		templateUrl: 'templates/form-details.html',
	})
	// answer state
	.state('form.answer', {
		url: '/answer',
		templateUrl: 'templates/form-answer.html'
	})
	.state('form.subscriptions',{
		url: '/subscriptions',
		templateUrl: 'templates/form-subscriptions.html'
	});
	// catch all routes
	// send users to form page
	$urlRouterProvider.otherwise('/form/details');
	// $locationProvider.html5Mode(true).hashPrefix('!');


});