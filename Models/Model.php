<?php
require_once 'inc/MyDB.php';

class Model extends MyDB {

    protected $table;

    public function all() {
        $sql = "SELECT * FROM $this->table";
        return $this->getALL($sql);
    }

    public function find(int $id) {
    }

    public function delete(int $id) {
    }

    public function insert(array $params) {
    }

    public function update(array $params, int $id) {
    }
}
?>
