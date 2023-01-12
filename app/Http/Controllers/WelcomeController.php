<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Month;
use App\Models\Calendar;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class WelcomeController extends Controller
{
    public function welcome() {

        if (Auth::user() == true) {

            $jan2023        = (new Calendar)->jan2023();
            $fer2023        = (new Calendar)->fer2023();
            $month          = (new Month)->month();
            $dayweek        = (new Calendar)->dayweek();
            $tasksLimit     = (new Task)->tasksLimit();

            return view ('welcome', compact('jan2023','fer2023','month','dayweek','tasksLimit'));
        } else {
            $jan2023        = (new Calendar)->jan2023();
            $fer2023        = (new Calendar)->fer2023();
            $month          = (new Month)->month();
            $dayweek        = (new Calendar)->dayweek();

            return view ('welcome', compact('jan2023','fer2023','month','dayweek'));
        }
    }
}
