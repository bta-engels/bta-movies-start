<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');

class MovieController extends Controller implements IController
{
    protected $model = Movie::class;

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
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
