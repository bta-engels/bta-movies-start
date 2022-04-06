<?php
require_once('Controller/Controller.php');
require_once('Models/User.php');

class UserController extends Controller
{
    public function login()
    {
        require_once('Views/forms/login.php');
    }

    public function check()
    {
        // check $_POST ,get username, password from $_POST
        Helper::dump($_POST);
        $model = new User();
//        $result = $model->check();
        echo 'check user data';
    }

    public function logout()
    {

    }
}
