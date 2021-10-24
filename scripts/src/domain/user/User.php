<?php

namespace domain\user;

use interfaces\domain\user\UserInterface;

class User implements UserInterface
{
    // If id is null, then this User is not in database
    protected int|null $id;
    protected string $login;
    protected string|null $password_hash;

    protected string|null $password;

    function __construct(string $login, string $password_hash=null, int $id=null){
        $this->login = $login;
        $this->password_hash = $password_hash;
        $this->id = $id;
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
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param string $pass
     */
    public function setPasswordHash(string $pass): void
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
        return $this->password_hash ?? password_hash($this->password, PASSWORD_DEFAULT);
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
}