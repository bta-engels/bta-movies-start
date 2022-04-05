<?php

abstract class Controller {

    protected $model;
    protected $auth;

    public function __construct()
    {
        //Helper::vdump($this->model);
    }
}
?>
