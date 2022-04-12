<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Movie.php');

class MovieController extends Controller implements IController
{

    // Refactoring option No 1: Setting $model to string Movie
    protected $model = Movie::class;

    // 2nd option: Add constructor in which a new Movie instance is defined
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->model = new Movie;
    // }

    public function index()
    {
        // @todo: get movies from db (use model)
        $data = $this->model->all();
        if ($this->auth) {
            require_once('Views/movie/admin/index.php');
        } else {
            require_once('Views/movie/index.php');
        }
    }

    public function show($id)
    {
        $data = $this->model->find($id);
        require_once('Views/movie/show.php');
    }

    public function edit($id = null)
    {
        $model = new Author;
        $authors = $model->all();
        if ($id > 0) {
            $data = $this->model->find($id);
            require_once('Views/movie/admin/update.php');
        } else {
            require_once('Views/movie/admin/create.php');
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
            header('Location:/movies');
        }
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location:/movies');
    }

}
