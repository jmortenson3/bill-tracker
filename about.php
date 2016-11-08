<!DOCTYPE html>
<html>
  <head>
    <title>When was that due?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,300,700,400|Raleway|Monoton|Lobster|Creepster|Gravitas+One|Amarante" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" />

    <!-- Include the AngularJS library -->
    <script src="js/shared/angular.min.js"></script>
  </head>

  <body ng-app="myApp">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about.php">about</a></li>
            <li><a href="create-account.php">create account</a></li>
            <li><a href="login.php">log in</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      
      
    <div class="title-container container content">
      <div class="title-wrapper">
        <h1>About BillTracker.</h1>
        <div class="btn-wrapper">
          <a href="create-account.html"><input class="btn-signup" type="button" value="CREATE ACCOUNT"></a>
          <a href="login.html"><input class="btn-login" type="button" value="LOG IN"></a>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Modules -->
    <script src="js/app.js"></script>

    <!-- Controllers -->

    <script src="js/controllers/MainController.js"></script>

  </body>
</html>