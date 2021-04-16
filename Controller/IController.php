<?php

interface IController {
    public function index();
    public function show(int $id);
    public function edit(int $id = null);
    public function store(int $id = null);
    public function delete(int $id);
}
