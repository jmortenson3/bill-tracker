<?php

//TODO
//CREATE A SESSION that the user opens when logging in.
//FILTER incoming data
// 1. Pass all variables through PHP's htmlspecialchars() function.
// 2. Strip unnecessary characters form the user input data. trim()
// 3. Remvoe backslashes from the user input data.  stripslashes()
//$pdo = new PDO('mysql:host=localhost:8080;dbname=billtracker');
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$pdo->exec('SET NAMES "utf8"');

function debug_to_console( $data ) {
  if ( is_array( $data ) ) {
    $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
  } else {
    $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
  }
  echo $output;
}

  //echo $_POST['loginUsername'];
  //echo $_POST['loginPassword'];
$userTable = 'dev_user_accounts';
debug_to_console("Starting the session...");
session_start();
//session_destroy();
//unset($_SESSION['userSession']);
require_once 'db-connect.php';
if (isset($_SESSION['userSession']) != "") {
  echo "<script>alert(" . "session isnt set or something" . ")</script>";
  //header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $requestmethod = $_SERVER['REQUEST_METHOD'];
  debug_to_console("$requestmethod");
  
  $loginUsername = filter_input(INPUT_POST, 'loginUsername', FILTER_SANITIZE_STRING);
  $loginPassword = filter_input(INPUT_POST, 'loginPassword', FILTER_SANITIZE_STRING);

  
  if (!empty($loginUsername) && !empty($loginPassword)) {      
    $check_username_query = $conn->prepare("SELECT username, encrypted_password FROM dev_user_accounts WHERE username = :username;");
    debug_to_console("Executing login SQL...");
    $check_username_query->execute(['username'=>$loginUsername]);
    $check_username_query->execute();
    $row = $check_username_query->fetch(PDO::FETCH_LAZY);
    $count = count($row);
    echo "<br>";
    if (password_verify($loginPassword, $row['encrypted_password'])) {
      echo "<br>Password verified!";
      $_SESSION['userSession'] = $row['username'];
      header('Location: user-dashboard.php');

    } else {
      header("Location: login.php");
      echo "<br>";
      echo "Invalid email or password.";
    }
    
  } else {
    debug_to_console("Username or psasword were empty.");
  }

} else {
  debug_to_console("Request was not POSTed.");
  $requestmethod = $_SERVER['REQUEST_METHOD'];
  debug_to_console("$requestmethod");
}

debug_to_console("closing the connection");
$conn = null;
?>