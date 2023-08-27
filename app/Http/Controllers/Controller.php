<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Lounge;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        $bookings = Booking::latest()->take(5)->get();
        $bankTransforCount = Booking::where('pay_way', 0)->count();
        $byWebsiteCount = Booking::where('pay_way', 1)->count();
        $clientCount = Client::count();
        $loungeCount = Lounge::count();
        return view('dashboard.dashboard-page', [
            'bookings' => $bookings,
            'bankTransforCount' => $bankTransforCount,
            'byWebsiteCount' => $byWebsiteCount,
            'clientCount' => $clientCount,
            'loungeCount' => $loungeCount,
        ]);
    }
}
