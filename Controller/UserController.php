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
        //check $_POST, get username , password from $_POST
        if ($_POST){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $model = new User();
            $result = $model->check($username, $password);
            Helper::vdump($result);
        }
    }

    public function logout()
    {

    }

}
