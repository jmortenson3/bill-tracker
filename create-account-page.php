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
    <div class="container content formParent">
      <div class="create-account-container">
        <div class="form-title">
          <h1>Get started!</h1>
          <small>it's free!</small>
        </div>
        <form>
          <div class="input-wrapper"><span class="formGlyph glyphicon-email glyphicon glyphicon-envelope"></span><input type="text" class="txt-field txt-email" placeholder="email address"></span></div>
          <div class="input-wrapper"><span class="formGlyph glyphicon-password glyphicon glyphicon-lock"></span><input type="password" class="txt-field txt-password" placeholder="password"></div>
          <div class="input-wrapper"><span class="formGlyph glyphicon-repassword glyphicon glyphicon-lock"></span><input type="password" class="txt-field txt-retype-password" placeholder="re-type password"></div>
          <div class="btn-create-account-submit" onclick="javascript:this.parentNode.submit();"><span class="glyphicon glyphicon-arrow-right"></span></div>
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