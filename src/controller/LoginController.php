<?php

namespace Ting\controller;
use Ting\model\User;

class LoginController
{

    function checkUser($email, $password)
    {
        $user =new user();
        $response = $user->existThisUser($email,$password);

        
    }

}


?>