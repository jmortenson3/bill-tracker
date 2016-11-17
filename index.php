<!DOCTYPE html>
<html>
  <head>
    <title>When was that due?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,300,700,400|Raleway:800|Raleway|Monoton|Lobster|Creepster|Gravitas+One|Amarante" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" />

    <!-- Include the AngularJS library -->
    <script src="js/shared/angular.min.js"></script>
  </head>
  
  <body ng-app="myApp">
    <div class="jumbotron">
        <h1>Billert</h1>
        <small>A simple way to help you remember.</small>
        <div class="btn-wrapper">
          <a href="create-account-page.php"><input class="btn-create-account" type="button" value="CREATE ACCOUNT"></a>
          <a href="login-page.php"><input class="btn-login" type="button" value="LOG IN"></a>
        </div>
    </div>
    <div class="container content">
      <div class="features-container">
        <div class="col-md-1 colFiller"></div>
        <div class="col-md-3 featureBox">
          <span class="glyphicon glyphicon-calendar"></span>
          <h1>tell us your bills</h1>
        </div>
        <div class="col-md-4 featureBox">
          <span class="glyphicon glyphicon-bell"></span>
          <h1>we'll reminder you</h1>
        </div>
        <div class="col-md-3 featureBox">
          <span class="glyphicon glyphicon-credit-card"></span>
          <h1>so you can pay them!</h1>
        </div>
        <div class="col-md-1 colFiller"></div>
      </div>
      <div class="charts-preview">
        <div class="col-md-12">
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