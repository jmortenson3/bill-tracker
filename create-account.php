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
$userTable = "dev_user_accounts";

session_start();

if (isset($_SESSION['userSession']) != "") {
  header("Location: index.php");
}

require_once 'db-connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  debug_to_console("REQUEST METHOD was POSTED - OK");
  
  try {
  
  $createAccountUsername = filter_input(INPUT_POST, 'createAccountUsername', FILTER_SANITIZE_STRING);
  $createAccountPassword = filter_input(INPUT_POST, 'createAccountPassword', FILTER_SANITIZE_STRING);
  $createAccountRepassword = filter_input(INPUT_POST, 'createAccountRepassword', FILTER_SANITIZE_STRING);
  
  
  if (!empty($createAccountUsername) && !empty($createAccountPassword) && !empty($createAccountRepassword)) {
    
    $hash = password_hash($createAccountPassword, PASSWORD_DEFAULT);
    debug_to_console("Verifying password...");
    if (password_verify($createAccountPassword, $hash)) {
      debug_to_console("Password verified");
    } else { debug_to_console("Password NOT verified"); }
      
      
    
    $check_username = $conn->prepare("SELECT username FROM $userTable WHERE username = :username;");
    $check_username->execute(['username'=>$createAccountUsername]);
    $count = count($check_username->fetchAll());
    debug_to_console("Accounts using this email: " . $count);
    
    if ($count == 0) {
      $createUserQuery = "INSERT INTO dev_user_accounts (username, encrypted_password) VALUES('" . $createAccountUsername . "', '" . $hash . "');";
      echo "<br>";
      if ($conn->query($createUserQuery)) {
        echo "account created for $createAccountUsername";
      } else {
        echo "Something went when creating your account :(  Try again later!";
      }
      
    } else {
      echo "An account with that email address already exists!";
    }
    
  } else {
    
    echo "Shit was empty";
  }
  } catch (Exception $e) {
    echo "an exception occurred:<br>";
    echo $e->getMessage();
  }
} else {
  debug_to_console("Request was not POSTed.");
  $requestmethod = $_SERVER['REQUEST_METHOD'];
  debug_to_console("$requestmethod");
}

debug_to_console("closing the connection");
$conn = null;
?>