var todoApp = angular.module('todoApp', ['todoMainCtrl', 'todoService', 'ngRoute'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }); 
// configure our routes
    todoApp.config(function($routeProvider) {
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : 'pages/list.html',
                controller  : 'mainController'
            })

            // route for the about page
            .when('/edit/:id', {
                templateUrl : 'pages/detail.html',
                controller  : 'mainController'
            })

            // route for the contact page
            .when('/new', {
                templateUrl : 'pages/detail.html',
                controller  : 'mainController'
            })

            .otherwise({
		      redirectTo:'/'
		    });
    });