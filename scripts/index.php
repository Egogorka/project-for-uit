<?php

echo "PHP works!<br/><br/>";

$container = array();

// Loading dependencies
require 'src/dependencies.php';

$user_db = $container[\domain\user\UserDB::class];
$note_db = $container[\domain\note\NoteDB::class];

// Test user adding
$user = new \domain\user\User("Test");
$user->setPassword("Test pass");

if($user_db->save($user))
    echo "Saved successfully!";
else
    echo "Something went wrong";

?>