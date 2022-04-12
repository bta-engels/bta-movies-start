<?php
require_once('Controller/Controller.php');

class UserController extends Controller
{
    protected $model = User::class;

    public function login($error = null)
    {
        require_once('Views/forms/login.php');
    }

    public function check()
    {
        //check $_POST, get username , password from $_POST
        if ($_POST){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = $this->model->check($username, $password);

            if(!$result) {
                $this->login('Login Daten falsch!');
            } else {
                // login war erfolgreich
                $_SESSION['auth'] = [
                    'id' => $result['id'],
                    'username'  => $result['username'],
                ];
                // weiterleiten auf homepage
                header('Location: /');
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['auth']);
        header('Location: /');
    }

}
