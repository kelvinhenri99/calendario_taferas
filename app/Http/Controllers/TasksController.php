<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function tasks() {

        return view ('tasks');
    }
}
