<?php

namespace App\Controllers;

class Todo extends BaseController
{
    public function index()
    {
        return view('todo_site');
    }
}