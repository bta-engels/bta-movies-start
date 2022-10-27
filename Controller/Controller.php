<?php
require_once('Models/Author.php');
//require_once('Models/Movie.php');
require_once('Models/User.php');

abstract class Controller {
    public $auth;
    protected $model;
    protected $modelName;

    public function __construct()
    {
        if($this->modelName && class_exists($this->modelName)) {
            $this->model = new $this->modelName();
        }
    }
}
?>
