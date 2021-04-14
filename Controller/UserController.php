<?php

require_once 'Models/User.php';

/**
 * Class UserController
 */
class UserController {

    /**
     * @var User
     */
    private $model;
    /**
     * @var string
     */
    private $redirectTo = '/';

    /**
     * UserController constructor.
     */
    public function __construct() {
        $this->model = new User();
    }

    /**
     * get login form
     */
    public function login() : void
    {
        require_once 'Views/Forms/login.php';
    }

    /**
     * check login data and redirect user
     */
    public function check() : void
    {
        if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $user = $this->model->get($username, $password); 
            if($user) {
                // todo: set auth session and redirect to home route
                $_SESSION['auth'] = $user;
                header("location: $this->redirectTo");
            } else {
                $error = 'Falsche Login Daten!';
                require_once 'Views/Forms/login.php';
            }
        }
    }

    /**
     * logout a user
     */
    public function logout() : void
    {
        unset($_SESSION['auth']);
        session_destroy();
        header("location: $this->redirectTo");
    }
}

?>
