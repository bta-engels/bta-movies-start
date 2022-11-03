<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Movie.php');


class MovieController extends Controller implements IController
{
    protected $modelName = Movie::class;

    public function index()
    {
        //$model  = new Movie;
        $data   = $this->model->all();
        if($this->auth){
            require_once ('Views/movie/admin/index.php');

        } else {
            require_once ('Views/movie/index.php');
        }   
    }

    public function show($id)
    {
        $data   = $this->model->one($id);
        require_once ('Views/movie/show.php');
    }

    public function edit($id = null)
    {
        // TODO: Implement edit() method.
        $data   = $this->model->one($id);
        require_once ('Views/movie/admin/create.php');
    }
    public function update(array $params, int $id) {
        $sql = "UPDATE `movies`
        SET `id` = '[id]',
            `author_id` = '[author_id]',
            `title` = '[title]',
            `price` = '[price]',
            `image` = NULL
        WHERE $id";
    }

    public function store($id = null)
    {
       $data   = $this->model->one($id);
       require_once ('Views/movie/admin/create.php');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
       // $data   = $this->model->
    }

}
