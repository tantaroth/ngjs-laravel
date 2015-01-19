<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>Nodes</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-resource.min.js">
        </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-route.min.js">
       </script>
    {{ HTML::script('js/services.js'); }}
    {{ HTML::script('js/app.js'); }}
</head>
<body>
    <h2>Nodes</h2>
    <div ng-view></div>
</body>
</html>