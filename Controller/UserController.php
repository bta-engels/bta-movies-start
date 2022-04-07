<?php
require_once('Controller/Controller.php');
require_once('Models/User.php');

class UserController extends Controller
{
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
            $model = new User();
            $result = $model->check($username, $password);
            // Helper::vdump($result);
            if (!$result) {
                $this->login('Falsche Login-Daten!');
            } else {
                $_SESSION['auth'] = [
                    'id' => $result['id'],
                    'username' => $result['username'],
                ];
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
