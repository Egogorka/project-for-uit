<?php

namespace application\controller;

use domain\user\User;
use interfaces\domain\user\AuthInterface;

class AuthController
{
    protected AuthInterface $auth;

    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    public function __invoke(&$args)
    {
        if(!empty($_SESSION['user'])){
            $args['log_state'] = AuthInterface::OKAY;
            $args['user'] = $_SESSION['user'];
        }

        if(!empty($_POST['login']) and !empty($_POST['pass'])) {
            $user = new User($_POST['login']);
            $user->setPassword($_POST['pass']);

            echo "<br>auth_controller<br>";
            var_dump($user);

            $args['log_state'] = $this->auth->signIn($user);

            if($args['log_state'] == AuthInterface::OKAY)
                $args['user'] = $_SESSION['user'] = $user;
        }
    }
}