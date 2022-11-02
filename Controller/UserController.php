<?php
require_once('Controller/Controller.php');

class UserController extends Controller
{
    protected $modelName = User::class;

    public function login($error = null)
    {
        require_once('Views/forms/login.php');
    }

    public function check()
    {
        //check $_POST, get username , password from $_POST
        // hier login daten prüfen
        $username = $_POST['username'];
        // passwort ist als MD5 hash gespeichert
        $password = md5($_POST['password']);

        $user = $this->model->check($username, $password);

        if($user) {
            // auth session bauen
            $_SESSION['auth'] = $user;
            header('location: /');
        } else {
            $this->login( 'Logindaten sind falsch');
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        // weiterleitung zur startseite 
        header('location: /');
    }
}
