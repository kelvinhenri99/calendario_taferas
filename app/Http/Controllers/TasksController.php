<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TasksController extends Controller
{
    public function tasks() {

        return view ('tasks');
    }

    public function insert(Request $request) {

        $id = Auth::user()->id;

        $insert                 = new Task;
        $insert->user_id        = $id;
        $insert->icon           = $request->icon;
        $insert->task           = $request->task;
        $insert->date           = $request->date;
        $insert->bg_color       = $request->bg_color;
        $insert->font_color     = $request->font_color;
        $insert->border_color   = $request->border_color;
        $insert->status         = "PENDENTE";

        $insert->save();

        return back()->withInput()->with('success', 'Tarefa cadastrada com sucesso!');
    }
}
