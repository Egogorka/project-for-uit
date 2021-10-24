<?php

require "AuthController.php";

$container[\application\controller\AuthController::class] = new \application\controller\AuthController(
    $container[\domain\user\Auth::class]
);