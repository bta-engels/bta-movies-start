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
        require_once('Views/author/index.php');
    }

    public function show($id)
    {
        $model = new Author;
        $data = $model->find($id);
        require_once('Views/author/show.php');
    }

}
