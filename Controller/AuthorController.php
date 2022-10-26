<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');

class AuthorController extends Controller implements IController
{
    protected $model = Author::class;
    
}
