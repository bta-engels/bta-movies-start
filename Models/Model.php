<?php
require_once 'inc/MyDB.php';

class Model extends MyDB {
    
    protected $table;
    protected $model;

    public function all() {
        $sql = "SELECT * FROM $this->table";
        return $this->getAll($sql);
    }

    public function find(int $id) {
        $sql = "
            SELECT *
            FROM $this->table
            WHERE id = ?";
        return $this->getOne($sql, [$id]);
    }

    public function delete(int $id) {
        $sql = "
        DELETE FROM $this->table
        WHERE id = ?";
        return $this->prepareAndExecute($sql, [$id]);
    }

    public function insert(array $params) {
    }

    public function update(array $params, int $id) {
    }
}
?>
