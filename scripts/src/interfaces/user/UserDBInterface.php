<?php

namespace interfaces\user;

interface UserDBInterface
{
    function findById(int $id):?UserInterface;

    function findByLogin(string $login):?UserInterface;

    // Updates ID of user
    function save(UserInterface& $user):bool;
}