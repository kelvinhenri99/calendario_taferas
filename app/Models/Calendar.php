<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public function jan2023(){

        return $this->from('calendars')
                    ->where('month', '1')
                    ->orderBy('id')
                    ->get();
    }

    public function fer2023(){

        return $this->from('calendars')
                    ->where('month', '2')
                    ->orderBy('id')
                    ->get();
    }
}
