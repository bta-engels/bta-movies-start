<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');

class AuthorController extends Controller implements IController
{
    protected $modelName = Author::class;

    public function index()
    {
            //$model  = new Movie;
            $data   = $this->model->all();
            if($this->auth){
                require_once ('Views/author/admin/index.php');
        
            } else {
                require_once ('Views/author/index.php');
                }
        
    }

    public function show($id)
    {
        {
            $data   = $this->model->one($id);
            require_once ('Views/author/show.php');
        }
    }

    public function edit($id = null)
    {
        // TODO: Implement edit() method.
    }

    public function store($id = null)
    {
        $data   = $this->model->one($id);
        require_once ('Views/author/admin/create.php');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
