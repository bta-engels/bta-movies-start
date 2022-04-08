<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Movie.php');

class MovieController extends Controller implements IController
{
    public function index()
    {
        // @todo: get movies from db (use model)
        $model = new Movie;
        $data = $model->all();
        if ($this->auth) {
            require_once('Views/movie/admin/index.php');
        } else {
            require_once('Views/movie/index.php');
        }
    }

    public function show($id)
    {
        $model = new Movie;
        $data = $model->find($id);
        require_once('Views/movie/show.php');
    }

    public function edit($id = null)
    {
        if ($id > 0) {
            $model = new Movie;
            $data = $model->find($id);
            require_once('Views/movie/admin/update.php');
        } else {
            require_once('Views/movie/admin/create.php');
        }
    }

    public function store($id = null)
    {
        // Normalerweise sollte $_POST aus Sicherheitsgründen validiert werden
        if ($_POST) {
            $model = new Movie;
            if ($id > 0) {
                $model->update($_POST, $id);
            } else {
                $model->insert($_POST);
            }
            header('Location:/movies');
        }
    }

    public function delete($id)
    {
        $model = new Movie;
        $model->delete($id);
        header('Location:/movies');
    }

}
