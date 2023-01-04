<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Month;
use App\Models\Calendar;

use function Ramsey\Uuid\v1;

class WelcomeController extends Controller
{
    public function welcome() {

        $months = (new Month)->months();
        $weekOn = (new Calendar)->weekOn();
        $weekTwo = (new Calendar)->weekTwo();
        $weekTree = (new Calendar)->weekTree();
        $weekFor = (new Calendar)->weekFor();
        $weekFive = (new Calendar)->weekFive();
        $weekSix = (new Calendar)->weekSix();
        $weekSeven = (new Calendar)->weekSeven();

        $today = date('d');

        return view ('welcome', compact('months','weekOn','weekTwo','weekTree','weekFor','weekFive','weekSix','weekSeven','today'));
    }
}
