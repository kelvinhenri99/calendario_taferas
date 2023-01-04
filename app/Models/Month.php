<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    public function months(){

        return $this->from('months')
                    ->select('month','id')
                    ->orderBy('id')
                    ->get();
    }
}
