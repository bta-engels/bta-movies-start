<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');

class AuthorController extends Controller implements IController
{
    protected $model = Author::class;

    public function index()
    {
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
        if ($_POST) {
            //Normalerweise kommt hier validierung
            if ($id > 0) {
                $this->model->update($_POST, $id);
            } else {
                $this->model->insert($_POST);
            }
            header('Location: /authors');
        }

    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /authors');
    }
}
