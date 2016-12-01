<?php
session_start();
include_once 'db-connect.php';
function debug_to_console( $data ) {
  if ( is_array( $data ) ) {
    $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
  } else {
    $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
  }
  echo $output;
}
// problem is right here...
if (!isset($_SESSION['userSession'])) {
  echo "<script>alert(" . "session isnt set or something" . ")</script>";
  //header('Location: index.php');
  debug_to_console("User session: " . $_SESSION['userSession']);
} else {
  debug_to_console("User session: " . $_SESSION['userSession']);
}

//$getUserQuery = $conn->prepare("SELECT username, encrypted_password FROM dev_user_accounts WHERE username = :username;");

?>
<!DOCTYPE html>
<html>
  <head>
    <title>When was that due?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,300,700,400|Raleway:800|Raleway|Monoton|Lobster|Lobster+Two|Creepster|Gravitas+One|Amarante" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" />
    <!--<link href="css/calendar.css" rel="stylesheet" />
    <link href="css/custom_2.css" rel="stylesheet" />
    <link href="css/demo.css" rel="stylesheet" />-->
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Billert</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li role="presentation"><a href="logout.php">Logout</a></li>
            <li><a href="#"></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['userSession'];?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid container content">
      <!--list bills here-->
      <div class="col-md-4 addBillWrapper">
        <div class="form-title">
          <h1>Add Bill</h1>
        </div>
        <form action="#" method="post">
          <label>Label</label>
          <div class="input-wrapper">
            <span class="formGlyph glyphicon-email glyphicon glyphicon-envelope"></span>
            <input type="text" class="txt-field txt-email" name="loginUsername" placeholder="email address">
          </div>
          <div class="input-wrapper">
            <span class="formGlyph glyphicon-password glyphicon glyphicon-lock"></span>
            <input type="password" class="txt-field txt-password" name="loginPassword" placeholder="password">
          </div>
          <div class="input-wrapper">
            <button class="btn-go" type="submit">add bill</button>
          </div>
        </form>
      </div>
      <div class="col-md-8 billListWrapper" >
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Due Date</th>
              <th>Bill Desc</th>
              <th>Amount</th>
              <th>Paid?</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            </tr>
            <tr>
              <td>1st</td>
              <td>Rent</td>
              <td>$629</td>
              <td class="form-inline">
                <input type="submit" name="btnRent" class="form-control dateSubmit" value="I paid this!"></input>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--<div class="fc-calendar-container" id="calendar"></div>-->
      
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/modernizr.custom.63321.js"></script>
    <!--<script src="js/jquery.calendario.js"></script>-->
    <script src="js/main.js"></script>

  </body>
</html>