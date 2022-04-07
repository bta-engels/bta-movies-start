<?php

abstract class Controller {

    protected $model;
    protected $auth;

    public function __construct()
    {
        if(isset($_SESSION['auth'])){
            $this->auth = $_SESSION['auth'];
        }
        //Helper::vdump($this->model);
    }
}
?>
