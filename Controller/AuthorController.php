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
        if ($this->auth) {
            require_once('Views/author/admin/index.php');
        } else {
            require_once('Views/author/index.php');
        }
    }

    public function show($id)
    {
        $model = new Author;
        $data = $model->find($id);
        require_once('Views/author/show.php');
    }

    public function edit($id = null)
    {
        if ($id > 0) {
            $model = new Author;
            $data = $model->find($id);
            require_once('Views/author/admin/update.php');
        } else {
            require_once('Views/author/admin/create.php');
        }
    }

    public function store($id = null)
    {
        // Normalerweise sollte $_POST aus Sicherheitsgründen validiert werden
        if ($_POST) {
            $model = new Author;
            if ($id > 0) {
                $data = $model->update($_POST, $id);
            } else {
                $data = $model->insert($_POST);
            }
            header('Location:/authors');
        }
    }

    public function delete($id)
    {
    }

}
