<?php
require_once 'Model.php';
class User extends Model {

    protected $table = 'users';

    public function get($username, $password)
    {
    }
} 