<?php

namespace App\Controllers;

class Projects extends BaseController
{
    public function index()
    {
        return view('projects_site');
    }
}