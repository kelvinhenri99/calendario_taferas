<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Task extends Model {
    public function tasksLimit(){

        $id = Auth::user()->id;

        return $this->from('tasks')
                    ->orderBy('date')
                    ->where('user_id', $id)
                    ->limit(5)
                    ->get();
    }
}
