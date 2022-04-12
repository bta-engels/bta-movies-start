<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Author.php');

class AuthorController extends Controller implements IController 
{

    // Refactoring option No 1: Setting $model to string Author
    protected $model = Author::class;

    // 2nd option: Add constructor in which a new Author instance is defined
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->model = new Author;
    // }

    public function index()
    {
        // @todo: get authors from db (use model)
        $data = $this->model->all();
        if ($this->auth) {
            require_once('Views/author/admin/index.php');
        } else {
            require_once('Views/author/index.php');
        }
    }

    public function show($id)
    {
        $data = $this->model->find($id);
        require_once('Views/author/show.php');
    }

    public function edit($id = null)
    {
        if ($id > 0) {
            $data = $this->model->find($id);
            require_once('Views/author/admin/update.php');
        } else {
            require_once('Views/author/admin/create.php');
        }
    }

    public function store($id = null)
    {
        // Normalerweise sollte $_POST aus Sicherheitsgründen validiert werden
        if ($_POST) {
            if ($id > 0) {
                $this->model->update($_POST, $id);
            } else {
                $this->model->insert($_POST);
            }
            header('Location:/authors');
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location:/authors');
    }

}
