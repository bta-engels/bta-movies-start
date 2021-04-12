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
    }

    /**
     * get login form
     */
    public function login() : void
    {
    }

    /**
     * check login data and redirect user
     */
    public function check() : void
    {
    }

    /**
     * logout a user
     */
    public function logout() : void
    {
    }
}

?>
