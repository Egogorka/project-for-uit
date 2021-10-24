<?php

require "Note.php";
require "NoteDB.php";

$container[\domain\note\NoteDB::class] =
    new \domain\note\NoteDB(
        $container[\mysqli::class]
    );
