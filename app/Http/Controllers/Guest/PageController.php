<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
    public function welcome()
    {

        $currentDateTime = Carbon::now();
        $currentDateTime->toArray();
        $currentDate = $currentDateTime->year . '-' . $currentDateTime->month . '-' . $currentDateTime->day;

        $trains = Train::where('departure_time', '>=', $currentDate)
            ->get();

        $data = [
            'trains' => $trains
        ];

        return view('guest.welcome', $data);
    }
}
