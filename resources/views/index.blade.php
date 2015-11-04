<!doctype html>
<html>
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-resource.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-route.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="js/controllers/todoMainCtrl.js"></script> <!-- load our controller -->
    <script src="js/services/todoService.js"></script> <!-- load our service -->
    <script src="js/project.js"></script>
  </head>
  <body ng-app="todoApp" ng-controller="mainController">
  <div class="container">
  <div class="span4">
    <h2>JavaScript Projects</h2>  
    <div ng-view>

</div>
  </div>
  </div>
  </body>
</html>