<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        $bookings = Booking::latest()->take(5)->get();
        return view('dashboard.dashboard-page', ['bookings' => $bookings]);
    }
}
