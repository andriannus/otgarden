var app = angular.module('app', ['ngRoute', 'ui.bootstrap']);

app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
  $locationProvider.html5Mode(true);

  $routeProvider
    .when('/admin', {
      controller: 'SiteController'
    })
    .when('/admin/news', {
      controller: 'SiteController'
    })
    .when('/admin/gallery', {
      controller: 'SiteController'
    })
}]);

app.controller('SiteController', ['$scope', '$http', '$uibModal', function($scope, $http, $uibModal) {
  $scope.$on('$routeChangeSuccess', function(event, routeData) {
    $http.get('api/news')
    .then(function success(data) {
      $scope.news = data.data.results;
    });

    $http.get('api/gallery')
    .then(function success(data) {
      $scope.gallery = data.data.results;
    })
  });

  $scope.deleteNews = function(slug) {
    $http({
      'method': 'DELETE',
      'url': 'api/news/' + slug,
      'headers': {'Content-Type' : 'application/x-www-form-urlencoded'}
    })
    .then(function success(data) {
      $http.get('api/news')
      .then(function success(data) {
        $scope.news = data.data.results;
      });

      $uibModal.open({
        templateUrl: 'message-box',
        controller: 'MessageBoxController',
        size: 'sm',
        resolve: {
          data: function() {
            return {
              title: 'Sukses',
              message: 'Berhasil',
              icon: 'fa fa-circle',
              color: '#ff0000'
            }
          }
        }
      });

    }, function error() {
      console.log('Error');
    });
  }
}]);
