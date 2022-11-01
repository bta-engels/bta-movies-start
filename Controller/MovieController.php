<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Movie.php');

class MovieController extends Controller implements IController
{
    protected $modelName = Movie::class;

    public function index()
    {
        $data = $this->model->all();
        if($this->auth) {
            require_once('Views/movie/admin/index.php');
        } else {
            require_once('Views/movie/index.php');
        }
    }

    public function show($id)
    {
        $data = $this->model->one($id);
        require_once('Views/movie/show.php');
    }

    public function edit($id = null)
    {
        $authors = $this->model->authors();
        if($id) {
            $data = $this->model->one($id);
            require_once('Views/movie/admin/update.php');
        } else {
            require_once('Views/movie/admin/create.php');
        }
    }

    public function store($id = null)
    {
        if($id) {
            $this->model->update($_POST, $id);
        } else {
            $this->model->insert($_POST);
        }
        return $this->index();
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return $this->index();
    }

}
