<?php
require_once 'Controller.php';
require_once 'Models/Author.php';
class AuthorController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Author();
    }

    public function index() {
        $list = $this->model->all();
        require_once 'Views/author/index.php';
    }

    public function show($id) {
    }
    
    // zeige formular zum editiern oder neu anlegen eines datensatzes an 
    public function edit($id = null) {
    }

    public function store($id = null) {
    }

    public function delete($id) {
    }
}
