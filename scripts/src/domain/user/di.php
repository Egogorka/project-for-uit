<?php

require "User.php";
require "UserDB.php";
require "Auth.php";

$container[\domain\user\UserDB::class] =
    new \domain\user\UserDB(
        $container[\mysqli::class]
    );

$container[\domain\user\Auth::class] =
    new \domain\user\Auth(
        $container[\domain\user\UserDB::class]
    );