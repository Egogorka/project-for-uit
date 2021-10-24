<?php

namespace interfaces\domain\note;

interface NoteInterface
{
    public function getId():int;

    public function getUserId():int;

    public function getHeader():string;

    public function getContents():string;
}