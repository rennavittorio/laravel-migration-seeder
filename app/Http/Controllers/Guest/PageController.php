<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {

        $trains = Train::where('departure_time', '>=', '2023-04-12')
            ->get();

        $data = [
            'trains' => $trains
        ];

        return view('guest.welcome', $data);
    }
}
