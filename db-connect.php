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
$cost = 12;
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// "$2a$" Means we're using the Blowfish algorithm.  The following two digits are the cost parameter
$salt = sprintf("$2a$%02d$", $cost) . $salt;

debug_to_console("Salt: " . $salt);
// GET SHOWS UP IN THE URL, so does post though...
//$hash = crypt($_POST["password"], $salt);
$hash = password_hash($_POST["password"], PASSWORD_DEFAULT, ['cost' => $cost]);


debug_to_console($_POST["username"]);
debug_to_console("Hashed password: " . $hash);
//$2a$10$SVAwnGxudjNeto/J.g5UV.0GLwpZxjUzU7qCFRTq/0N3J.lP4drIq
?>