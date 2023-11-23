<?php

  require_once("templates/header.php");

  if($userController) {
    $userController->destroyToken();
  }