<?php

namespace interfaces\domain\user;

interface UserInterface
{
    //One part of the brain says that I don't need to know about ID's from DB.
    //Other part says "Do it! Just do it!"
    //I'll succumb to the second one
    public function getId():int;
    public function setId(int $id);

    public function getLogin():string;
    public function setLogin(string $login);

    public function getPasswordHash():string;
    public function setPasswordHash(string $pass); //Not setPasswordHash!
}