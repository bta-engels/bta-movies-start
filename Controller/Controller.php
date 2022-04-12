<?php
require_once('Models/Author.php');
require_once('Models/Movie.php');
require_once('Models/User.php');

abstract class Controller {

    protected $model;
    protected $auth;

    public function __construct()
    {
        if(isset($_SESSION['auth'])) {
            $this->auth = $_SESSION['auth'];
        }
        if($this->model && class_exists($this->model)) {
            $this->model = new $this->model;
        }
    }
}
?>
