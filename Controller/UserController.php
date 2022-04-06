<?php
require_once('Controller/Controller.php');

class UserController extends Controller
{
    public function login()
    {
        require_once('Views/forms/login.php');
    }

    public function check()
    {
        echo "check userdata";
    }

    public function logout()
    {

    }

}