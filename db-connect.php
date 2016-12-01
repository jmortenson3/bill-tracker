<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$cost = 12;


$port = '3306';
$servername = 'localhost' . ":$port";
$configFile = 'db-connect.txt';
$scanner_mode = INI_SCANNER_NORMAL;
$configResults = parse_ini_file ( $configFile, false , $scanner_mode );
$charset = 'utf8';

$dbUsername = $configResults['username'];
$dbPassword = $configResults['password'];

try { 
  $dsn = "mysql:host=$servername;dbname=billtracker;charset=$charset";
  $options = [
      PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION, 
      PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES    => false,
  ];
  $conn = new PDO($dsn, $dbUsername, $dbPassword, $options);
} catch (PDOException $e) {
  echo $e->getMessage();
} catch (Exception $e) {
  echo $e->getMessage();
}

