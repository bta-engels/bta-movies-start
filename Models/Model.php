<?php
require_once 'inc/MyDB.php';
class Model extends MyDB {

    protected $table;

    public function all() {
        $sql = "SELECT * FROM $this->table";
        return $this->getAll($sql);
    }
        
    public function find(int $id) {
        // parameter per numeric array
        $sql = "SELECT * FROM $this->table WHERE id=?";
        return $this->getOne($sql, [$id]);
        /*
        // parameter per assoc array
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        return $this->getOne($sql, ['id' => $id]);
        */
    }
}
?>
