<?php

session_start();
require "src/dependencies.php";

$bundle = array();

$container[\application\controller\AuthController::class]($bundle);

