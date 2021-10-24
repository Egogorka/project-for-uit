<?php

namespace domain\user;

use interfaces\user\UserDBInterface;
use interfaces\user\UserInterface;

class UserDB implements UserDBInterface
{
    protected \mysqli $mysqli;

    public function __construct(\mysqli $mysqli)
    {
        $this->mysqli = $mysqli;
    }

    function findById(int $id): ?UserInterface
    {
//        $result = $this->mysqli->query(
//            'SELECT * FROM notes.users WHERE id='.$id
//        );
    }

    function findByLogin(string $login): ?UserInterface
    {
        // TODO: Implement findByLogin() method.
    }

    function save(UserInterface $user): bool
    {
        $this->mysqli->query(
            'INSERT INTO notes.users (login, password) VALUES (\''.$user->getLogin().'\', \''.$user->getPasswordHash().'\')',
        );
        return true;
    }
}