<?php
require_once 'Controller.php';
require_once 'Models/Movie.php';

class MovieController extends Controller {

    public function __construct() {
        $this->model = new Movie();
        parent::__construct();
    }

    public function index() {
        $list = $this->model->all();
//        Helper::dump($list);
        if ($this->auth) {
            require_once 'Views/movie/admin/index.php';
        } else {
            require_once 'Views/movie/index.php';
        }

    }

    public function show(int $id) {
        $item = $this->model->find($id);
//        Helper::dump($item);
        require_once 'Views/movie/show.php';
    }


}