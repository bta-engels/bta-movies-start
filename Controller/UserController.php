<?php
require_once('Controller/Controller.php');

class UserController extends Controller
{
    protected $model = User::class;

    public function login($error = null)
    {
    }

    public function check()
    {
        //check $_POST, get username , password from $_POST
    }

    public function logout()
    {
    }
}
