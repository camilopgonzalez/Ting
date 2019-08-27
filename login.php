<?php

    require_once "vendor/autoload.php";
    use Ting\Controller\LoginController;

    $controller = new LoginController();
    $controller->checkUser($email, $password);

?>