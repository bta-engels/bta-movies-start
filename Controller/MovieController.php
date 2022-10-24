<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');

class MovieController extends Controller implements IController
{
    protected $model = Movie::class;
}
