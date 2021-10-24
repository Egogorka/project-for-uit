<?php

require "AuthView.php";
require "NotesView.php";

$container[\application\view\AuthView::class] = new \application\view\AuthView();
$container[\application\view\NotesView::class] = new \application\view\NotesView();
