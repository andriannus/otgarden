var app = angular.module('app', ['ngRoute', 'ui.bootstrap', 'ngFileUpload']);

app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
  $locationProvider.html5Mode(true);

  $routeProvider
    .when('/gallery/add', {
      controller: 'AddController'
    })
    .when('/gallery/edit/:id?', {
      controller: 'EditController'
    })
}])

app.controller('AddController', ['$scope', '$http', '$window', function($scope, $http, $window) {
  $scope.save = function() {
    $http({
      'method': 'POST',
      'url': 'api/gallery',
      'data': {
        'title': $scope.gallery.title,
        file: $scope.gallery.image,
        'category': $scope.gallery.category,
        'caption': $scope.gallery.caption
      },
      'headers': {'Content-Type': 'application/x-www-form-urlencoded'}
    })
    .then(function success(data) {
      console.log($scope.gallery);
    }, function error() {
      console.log('Error');
    });
  }
}]);

app.controller('EditController', ['$scope', '$http', '$route', function($scope, $http, $route) {
  $scope.$on('$routeChangeSuccess', function(event, routeData) {
    $http.get('api/news?slug=' + $route.current.params.slug)
    .then(function success(data) {
      $scope.news = data.data.result;
    }, function error() {
      console.log('Error');
    })
  });

  $scope.save = function() {
    $http({
      'method': 'PUT',
      'url': 'api/news/' + $scope.news.slug,
      'data': $scope.news,
      'headers': {'Content-Type': 'application/json'}
    })
    .then(function success(data) {
      console.log($scope.news.category);
    }, function error() {
      console.log('Error');
    });
  }
}]);
