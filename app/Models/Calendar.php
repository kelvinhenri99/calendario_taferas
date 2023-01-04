<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public function weekOn(){

        return $this->from('calendars')
                    ->where('dayweek', '0')
                    ->select('day')
                    ->orderBy('id')
                    ->get();
    }

    public function weekTwo(){

        return $this->from('calendars')
                    ->where('dayweek', '1')
                    ->select('day')
                    ->orderBy('id')
                    ->get();
    }

    public function weekTree(){

        return $this->from('calendars')
                    ->where('dayweek', '2')
                    ->select('day')
                    ->orderBy('id')
                    ->get();
    }

    public function weekFor(){

        return $this->from('calendars')
                    ->where('dayweek', '3')
                    ->select('day')
                    ->orderBy('id')
                    ->get();
    }

    public function weekFive(){

        return $this->from('calendars')
                    ->where('dayweek', '4')
                    ->select('day')
                    ->orderBy('id')
                    ->get();
    }

    public function weekSix(){

        return $this->from('calendars')
                    ->where('dayweek', '5')
                    ->select('day')
                    ->orderBy('id')
                    ->get();
    }

    public function weekSeven(){

        return $this->from('calendars')
                    ->where('dayweek', '6')
                    ->select('day')
                    ->orderBy('id')
                    ->get();
    }
}
