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
    
    <!-- NAV BAR -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-ice-lolly-tasted"></span></a>
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
    <!-- END NAV BAR -->
    <div class="container content">
      <div class="create-account-container">
        <form>
          <label>email address:<br><span class="span-light-text">we won't send you spam!</span></label>
          <input type="text" class="txt-field txt-email">
          <label>password:</label>
          <input type="password" class="txt-field txt-password">
          <label>re-type password:</label>
          <input type="password" class="txt-field txt-retype-password">
          <input type="button" value="Log in" class="btn-login-submit">
        </form>
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