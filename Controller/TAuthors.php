<?php
require_once 'Models/Author.php';

trait TAuthors
{
    protected function getAuthors() {
        return (new Author())->all();
    }

    protected function getAuthor(int $id) {
        return (new Author())->find($id);
    }
}
