<?php

require_once('Models/Model.php');

class Author extends Model
{
    protected $table = 'authors';

    public function insert(array $params) {
        $sql = "INSERT INTO $this->table (firstname, lastname) VALUES (:firtname, :lastname)";
        return $this->prepareAndExecute($sql, $params);
    }

    public function update(array $params, int $id) {
        $sql = "UPDATE $this->table SET firstname=:firstanme, lastname=:lastname WHERE id=:id";
        $params['id'] = $id;
        return $this->prepareAndExecute($sql, $params);
    }
}
