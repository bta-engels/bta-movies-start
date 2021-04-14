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
}
?>
