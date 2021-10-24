<?php

namespace domain\user;

use interfaces\user\AuthInterface;
use interfaces\user\UserDBInterface;
use interfaces\user\UserInterface;

class Auth implements \interfaces\user\AuthInterface
{
    protected UserDBInterface $userDB;
    public function __construct(UserDBInterface $userDB)
    {
        $this->userDB = $userDB;
    }

    /**
     * We expect User to not have Id, but we don't need it anyway
     * @param UserInterface $user
     */
    public function register(UserInterface& $user):int
    {
        // Cuz userBD->save does nothing if user with such login is already in DB, we check it implicitly
        if($this->userDB->findByLogin($user->getLogin()))
            return AuthInterface::USER_EXISTS;

        if($this->userDB->save($user))
            return AuthInterface::OKAY;

        return AuthInterface::DB_ERROR;

    }

    public function signIn(UserInterface& $user):int
    {
        if(!$db_user = $this->userDB->findByLogin($user->getLogin()))
            return AuthInterface::NO_USER;

        if($db_user->getPasswordHash() == $db_user->getPasswordHash() ) {
            $user->setId($db_user->getId());
            return AuthInterface::OKAY;
        }

        return AuthInterface::WRONG_PASS;

    }
}