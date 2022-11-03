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
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        return $this->getOne($sql, [$id]);
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        return $this->prepareAndExecute($sql, [$id]);
    }

    /**
     * @param array $params
     * @return void
     */
    public function insert(array $params) {
        $cols = array_keys($params);
        $strCols = implode(',', $cols);
        $placeholder = [];
        foreach($cols as $col) {
            $placeholder[] = ":$col";
        }
        $values = implode(',', $placeholder);
        $sql = "INSERT INTO $this->table ($strCols) VALUES ($values)";

        return $this->prepareAndExecute($sql, $params);
    }

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id) {
        $cols = array_keys($params);
        $placeholder = [];
        foreach($cols as $col) {
            $placeholder[] = "$col = :$col";
        }
        $values = implode(',', $placeholder);
        $sql = "UPDATE $this->table SET $values WHERE id = :id";
        $params['id'] = $id;
        
        return $this->prepareAndExecute($sql, $params);
    }
}
?>
