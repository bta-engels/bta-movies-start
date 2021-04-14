<?php
require_once 'Model.php';
class Author extends Model {

    protected $table = 'authors';

    public function find(int $id) {
        $data = parent::find($id);

        // get movies
        $sql = "SELECT * FROM movies WHERE author_id = ?";
        $data['movies'] = $this->getAll($sql, [$id]);

        return $data;
    }

    public function insert(array $params) {
        $sql = "INSERT INTO authors (firstname, lastname) VALUES (:firstname, :lastname)";
        return $this->prepareAndExecute($sql, $params);
    }

    public function update(array $params, int $id) {
        $sql = "UPDATE authors SET firstname = :firstname, lastname = :lastname WHERE id=:id";
        $params['id'] = $id;
        return $this->prepareAndExecute($sql, $params);
    }
}
