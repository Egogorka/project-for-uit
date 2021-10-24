<?php

///////////////////
// this block needs to be in some DB-like class
$servername = "localhost";
$username = "NotesUser";
$password = "simple_password_for_user";

// Create connection
$mysqli = new mysqli($servername, $username, $password);

// Check connection
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}

//
///////////////////

$container = array();
$container[\mysqli::class] = $mysqli;

require "interfaces/di.php";
require "domain/di.php";
require "application/di.php";