<?php

namespace interfaces\user;

interface UserDBInterface
{
    function findById(int $id):?UserInterface;

    function findByLogin(string $login):?UserInterface;

    function save(UserInterface $user): bool;
}