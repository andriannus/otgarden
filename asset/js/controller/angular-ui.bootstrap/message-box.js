app.controller('MessageBoxController', function($scope, $sce, $uibModalInstance, data) {
  $scope.icon = data.icon;
  $scope.color = data.color;
  $scope.message = data.message;
  $scope.title = data.title;

  $scope.close = function() {
    $uibModalInstance.close();
  }
})
