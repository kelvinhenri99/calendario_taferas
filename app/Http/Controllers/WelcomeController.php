<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Month;
use App\Models\Calendar;

use function Ramsey\Uuid\v1;

class WelcomeController extends Controller
{
    public function welcome() {

        $jan2023    = (new Calendar)->jan2023();
        $fer2023    = (new Calendar)->fer2023();
        $month      = (new Month)->month();
        $dayweek    = (new Calendar)->dayweek();

        return view ('welcome', compact('jan2023','fer2023','month','dayweek'));
    }
}
