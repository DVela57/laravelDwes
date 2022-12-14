<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function index()
    {
        echo "Index studies";
    }

    public function show($id)
    {
        echo "show studies $id";
    }

    public function create()
    {
        echo "create studies";
    }

    public function edit($id)
    {
        echo "edit studies $id";
    }
}
