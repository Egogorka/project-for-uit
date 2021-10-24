<?php

namespace interfaces\domain\user;

interface AuthInterface
{
    public const OKAY = 0;
    /**
     * Returns OKAY if registering is okay
     * and other values (that are listed below) if something is wrong
     * Also updates ID of user if OKAY
     * @param UserInterface $user
     * @return int
     */
    public function register(UserInterface& $user):int;

    // Constants for register
    public const DB_ERROR = 1;
    public const USER_EXISTS = 2;
    public const SMALL_PASS = 3;
    public const BIG_PASS = 4;


    /**
     * Returns OKAY if signing in is okay
     * and other values (that are listed below) if something happens
     * Also updates ID of user if OKAY
     * @param UserInterface $user
     * @return bool
     */
    public function signIn(UserInterface& $user):int;

    // Constants for signIn
//    public const DB_ERROR = 1;
    public const NO_USER = 2;
    public const WRONG_PASS = 3;

    // Constants are overlapping but in a right use it won't matter
    // (anyway enums are coming in 8.1)
}