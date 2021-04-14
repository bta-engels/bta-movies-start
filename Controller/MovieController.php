<?php
require_once 'Controller.php';
require_once 'Models/Movie.php';

class MovieController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new Movie();
    }

    public function index() {
        $list = $this->model->all();
        Helper::dump($list);
    }
}