<?php
require_once 'Model.php';
class User extends Model {

    protected $table = 'users';

    public function get(string $username, string $password)
    {
        
    }
} 