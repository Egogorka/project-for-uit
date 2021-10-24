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
        $result = $this->mysqli->query(
            'SELECT * FROM notes.users WHERE id='.$id
        );
        if($result->num_rows){
            $obj = $result->fetch_object();
            return new User($obj->login, $obj->password, $obj->id);
        } else
            return null;
    }

    function findByLogin(string $login): ?UserInterface
    {
        $result = $this->mysqli->query(
            'SELECT * FROM notes.users WHERE login=\''.$login.'\''
        );
        if($result->num_rows){
            $obj = $result->fetch_object();
            return new User($obj->login, $obj->password, $obj->id);
        } else
            return null;
    }

    function save(UserInterface& $user):bool
    {
        $query = 'INSERT INTO notes.users (login, password) VALUES (\''.$user->getLogin().'\', \''.$user->getPasswordHash().'\')';
        if(!$result = $this->mysqli->query($query))
            return false;

        $db_user = $result->fetch_object();

        $user->setId($db_user->id);
        return true;
    }
}