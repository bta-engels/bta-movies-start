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
}
