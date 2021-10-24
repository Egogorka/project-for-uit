<?php

require "User.php";
require "UserDB.php";

$container[\domain\user\UserDB::class] =
    new \domain\user\UserDB(
        $container[\mysqli::class]
    );