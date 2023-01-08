<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    public function month(){

        return $this->from('months')
                    ->orderBy('id')
                    ->get();
    }
}
