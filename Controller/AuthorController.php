<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');

class AuthorController extends Controller implements IController
{
    protected $model = Author::class;

    public function index()
    {
        // TODO: Implement index() method.
        die(__METHOD__);
    }

    public function show($id)
    {
        // TODO: Implement show() method.
        die(__METHOD__);
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
