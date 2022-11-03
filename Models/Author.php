<?php
require_once('Models/Model.php');

class Author extends Model
{
    protected $table = "authors";
    public function all() {
        $sql = "SELECT * FROM authors";
        return $this->getAll($sql);
    }
        public function one(int $id) {
        $sql = "SELECT
        id, firstname, lastname
        FROM authors
        WHERE id=?";
        return $this->getOne($sql, [$id]);
    }


    /**
     * @param array $params
     * @return void
     */
    public function insert(array $params) {
        $sql = "INSERT INTO authors (firstname, lastname) 
        VALUES (:firstname, :lastname)";
        return $this->prepareAndExecute($sql, $params);
    }

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id) {
        $params['id'] = $id;
        $sql = "UPDATE authors
        SET firstname = :firstname,
            lastname = :lastname
        WHERE id = :id";
        return $this->prepareAndExecute($sql, $params);
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
        $sql = "DELETE FROM authors WHERE id = ?";
        return $this->prepareAndExecute($sql, [$id]);
    }
}
