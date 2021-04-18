<?php
require_once 'inc/MyDB.php';

class Model extends MyDB {

    protected $table;

    public function all() {
        $sql = "SELECT * FROM $this->table";
        return $this->getAll($sql);
    }

    public function find(int $id) {
        // numeric parameters
        $sql = "SELECT * FROM $this->table WHERE id=?";
        return $this->getOne($sql, [$id]);

        // assoc parameters
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        return $this->getOne($sql, ['id' => $id]);
    }

    public function delete(int $id) {
        $sql = "DELETE FROM $this->table WHERE id=?";
        return $this->prepareAndExecute($sql, [$id]);
    }

    public function insert(array $params) {
        $columns = array_keys($params);
        $placeholder = array_map(function ($key) { return ":$key"; }, $columns);
        $sql = "INSERT INTO $this->table (".implode(',', $columns).") VALUES (".implode(',', $placeholder).")";
        return $this->prepareAndExecute($sql, $params);
    }

    public function update(array $params, int $id) {
        $columns = array_keys($params);
        $placeholder = array_map(function ($key) { return "$key = :$key"; }, $columns);
        $sql = "UPDATE $this->table SET ".implode(',', $placeholder)." WHERE id=:id";
        $params['id'] = $id;
        return $this->prepareAndExecute($sql, $params);
    }

}
?>
