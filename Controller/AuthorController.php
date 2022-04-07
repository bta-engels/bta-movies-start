<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Author.php');

class AuthorController extends Controller implements IController
{
    public function index()
    {
        // @todo: get authors from db (use model)
        $model = new Author;
        $data = $model->all();
        $auth = $this->auth;
        require_once('Views/author/index.php');
    }

    public function show($id)
    {
        $model = new Author;
        $data = $model->find($id);
        require_once('Views/author/show.php');
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
