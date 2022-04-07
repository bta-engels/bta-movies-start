<?php

interface IController
{
    public function index();

    public function show($id);

    public function edit($id = null);

    public function store($id = null);

    public function delete($id);
}