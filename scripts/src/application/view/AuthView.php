<?php

namespace application\view;

use interfaces\application\View;
use interfaces\domain\user\AuthInterface;

class AuthView implements View
{
    public function render($args)
    {
        if(empty($args['log_state']) && $args['log_state'] !== AuthInterface::OKAY)
            $args['log_state'] = -1;

        switch ($args['log_state']){
            case AuthInterface::OKAY:
                echo "
                <p>You are logged</p>
                ";
                break;
            case AuthInterface::WRONG_PASS:
                echo "
                <p>Wrong password</p>
                ";
                break;
            case AuthInterface::NO_USER:
                echo "
                <p>No such user</p>
                ";
        }

        if($args['log_state'] != -1 && $args['log_state'] != AuthInterface::OKAY)
            echo "
            <b>Register form</b>
            <form method='post'>
                Enter your login and password <br>
                <input name='login' type='text'>
                <input name='pass' type='password'>
                <input type='submit'>
            </form>
            ";
    }
}