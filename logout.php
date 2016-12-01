<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

if (!isset($_SESSION['userSession'])) {
  header('Location: index.php');
} else if (isset ($_SESSION['userSession']) != "") {
  header("Location: index.php");
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['userSession']);
  header('Location: index.php');
}