<?php
require_once 'inc/MyDB.php';

/**
 *
 */
class Model extends MyDB {

    /**
     * @var
     */
    protected $table;

    /**
     * @return void
     */
    public function all() {
        $sql = "SELECT * FROM $this->table";
        return $this->getAll($sql);
    }

    /**
     * @param int $id
     * @return void
     */
    public function one(int $id) {
        $sql = "SELECT * FROM $this->table WHERE id=?";
        return $this->getOne($sql,[$id]);
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
    }

    /**
     * @param array $params
     * @return void
     */
    public function insert(array $params) {
    }

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id) {
    }
}
?>
