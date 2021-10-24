<?php

session_start();
require "src/dependencies.php";

$cur_user = $_SESSION["user"] | null;