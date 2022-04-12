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
        $keys = array_keys($params);
        $cols = implode(",", $keys);

        function placeholder($col) {
            return ':' . $col;
        }

        $values = implode(",", array_map('placeholder', $keys));

        $sql = "INSERT INTO $this->table ($cols) VALUES ($values)";
        return $this->prepareAndExecute($sql, $params);
    }

    public function update(array $params, int $id) {
        $keys = array_keys($params);

        function placeholder($col) {
            return $col . '=:' . $col;
        }

        $values = implode(",", array_map('placeholder', $keys));

        $sql = "UPDATE $this->table
        SET $values
        WHERE id=:id";
        $params['id'] = $id;
        return $this->prepareAndExecute($sql, $params);
    }
}
?>
