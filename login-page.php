<!DOCTYPE html>
<html>
  <head>
    <title>When was that due?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,300,700,400|Raleway:800|Raleway|Monoton|Lobster|Lobster+Two|Creepster|Gravitas+One|Amarante" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" />
  </head>

  <body> 
    <div class="container content formParent">
      <div class="login-container">
        <div class="form-title">
          <h1>Log in</h1>
        </div>
        <form action="logging-in.php" method="post">
          <div class="input-wrapper">
            <span class="formGlyph glyphicon-email glyphicon glyphicon-envelope"></span>
            <input type="text" class="txt-field txt-email" name="loginUsername" placeholder="email address">
          </div>
          <div class="input-wrapper">
            <span class="formGlyph glyphicon-password glyphicon glyphicon-lock"></span>
            <input type="password" class="txt-field txt-password" name="loginPassword" placeholder="password">
          </div>
          <div class="input-wrapper">
            <button class="btn-go btn-create-account-submit" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>