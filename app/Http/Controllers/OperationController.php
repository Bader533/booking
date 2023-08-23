<?php

namespace App\Http\Controllers;

use App\Models\Lounge;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function homePage()
    {
        return view('frontend.home');
    }

    public function loungeDetails($slug)
    {
        $lounge = Lounge::where('slug', $slug)->first();
        return view('frontend.lounge-details', ['lounge' => $lounge]);
    }

    public function search(Request $request)
    {
        $dates = explode(" - ", $request->date);
        $startDate =  $dates[0];
        $endDate =  $dates[1];

        $avalibleLounges = Lounge::whereDoesntHave('bookings', function ($query) use ($startDate, $endDate) {
            $query->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('start_date', [$startDate, $endDate])
                    ->orWhereBetween('end_date', [$startDate, $endDate]);
            });
        })->get();

        return view('frontend.lounges', ['avalibleLounges' => $avalibleLounges]);
    }

    public function bookingLounge(Request $request)
    {
    }
}
