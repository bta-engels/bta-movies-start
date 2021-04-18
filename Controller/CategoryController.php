<?php
require_once 'Controller.php';
require_once 'Models/Category.php';

class CategoryController extends Controller {

    public function __construct() {
        $this->model = new Category();
        parent::__construct();
    }

    public function index() {
        $list = $this->model->all();
        if($this->auth) {
            require_once 'Views/category/admin/index.php';
        }
        else {
            require_once 'Views/category/index.php';
        }
    }

    public function show($id) {
        $item = $this->model->find($id);
        require_once 'Views/category/show.php';
    }

    // zeige formular zum editiern oder neu anlegen eines datensatzes an
    public function edit($id = null) {

        if(!$this->auth) {
            header('location: /categories');
        }

        if($id) {
            $data = $this->model->find($id);
        }

        require_once 'Views/Forms/category.php';
    }

    public function store($id = null) {
        if (!$this->auth) {
            header('location: /categories');
        }
        $params = null;

        if(isset($_POST['name']) && '' !== $_POST['name']) {
            $params = $_POST;
        }

        if($params) {
            if ($id) {
                $this->model->update($params, $id);
            } else {
                $this->model->insert($params);
            }
        }
        header('location: /categories');
    }

    public function delete($id) {
        if($this->auth) {
            $this->model->delete($id);
        }
        header('location: /categories');
    }
}
