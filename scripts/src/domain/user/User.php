<?php

namespace domain\user;

use interfaces\user\UserInterface;

class User implements UserInterface
{
    protected int $id;
    protected string $login;
    protected string $password_hash;

    function __construct(string $login, string $password_hash=""){
        $this->login = $login;
        $this->password_hash = $password_hash;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @param string $pass
     */
    public function setPassword(string $pass): void
    {
        $this->password_hash = password_hash($pass, PASSWORD_DEFAULT);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->password_hash;
    }
}