<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index()
    {
        return view('tasks_site');
    }
}