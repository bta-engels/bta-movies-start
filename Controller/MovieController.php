<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Movie.php');

class MovieController extends Controller implements IController
{
    protected $modelName = Movie::class;

    public function index()
    {
        $model = new Movie();
        $data = $model->all();
        require_once('Views/movie/index.php');
    }

    public function show($id)
    {
        // TODO: Implement show() method.
        echo "Einzelansicht für Movie mit ID: $id";
    }

    public function edit($id = null)
    {
        // TODO: Implement edit() method.
    }

    public function store($id = null)
    {
        // TODO: Implement store() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}
