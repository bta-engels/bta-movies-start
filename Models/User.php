<?php

require_once('Models/Model.php');

class User extends Model
{
    protected $table = 'users';

    public function check(string $userName, string $password) {
        $sql = "SELECT id,username FROM users WHERE username = ? AND password = ?";
        return $this->getOne($sql, [$userName, $password]);
    }
}
