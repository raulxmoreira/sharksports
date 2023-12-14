<?php

  require_once("templates/header_logout.php");

  if($userController) {
    $userController->destroyToken();
  }