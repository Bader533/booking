<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Lounge;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OperationController extends Controller
{
    public function homePage()
    {
        return view('frontend.home');
    }

    public function loungeDetails(Request $request, $slug)
    {
        // dd($request->date);
        $lounge = Lounge::where('slug', $slug)->first();

        $dates = explode(" - ", $request->date);

        $startDate = date("Y-m-d", strtotime($dates[0]));
        $endDate = date("Y-m-d", strtotime($dates[1]));
        $toDate = Carbon::parse($startDate);
        $fromDate = Carbon::parse($endDate);

        $days = $toDate->diffInDays($fromDate);

        return view('frontend.lounge-details', ['lounge' => $lounge, 'date' => $request->date, 'days' => $days]);
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required',
        ]);

        $dates = explode(" - ", $request->date);

        $startDate = date("Y-m-d", strtotime($dates[0]));
        $endDate = date("Y-m-d", strtotime($dates[1]));

        $avalibleLounges = Lounge::whereDoesntHave('bookings', function ($query) use ($startDate, $endDate) {
            $query->whereBetween('start_date', [$startDate, $endDate])
                ->orWhereBetween('end_date', [$startDate, $endDate])
                ->orWhere(function ($query) use ($startDate, $endDate) {
                    $query->where('start_date', '<', $startDate)
                        ->where('end_date', '>', $endDate);
                });
        })->get();

        $toDate = Carbon::parse($startDate);
        $fromDate = Carbon::parse($endDate);

        $days = $toDate->diffInDays($fromDate);

        return view('frontend.lounges', [
            'avalibleLounges' => $avalibleLounges,
            'date' => $request->date,
            'days' => $days
        ]);
    }

    public function bookingLounge(Request $request)
    {
        $lounge = Lounge::where('slug', $request->slug)->first();
        return view('frontend.booking', ['lounge' => $lounge, 'date' => $request->date]);
    }

    public function booking(Request $request, $slug)
    {
        // dd($request);
        $validator = Validator($request->all(), [
            'f_name' => 'required | string | min:3 | max:40',
            'l_name' => 'required | string | min:3 | max:40',
            'phone' => 'required | numeric',
            'nationality' => 'required | string | min:3 | max:100',
            'client_kind' => 'required | string | min:3 | max:40',
            // 'id_kind' => 'required | string | min:3 | max:40',
            // 'id_copy' => 'required | string | min:3 | max:40',
            // 'visa_number' => 'required | numeric',
            // 'sign_in' => 'required | date',
            // 'entry_time' => 'required',
            // 'duration' => 'required | numeric',
            // 'arrival_destination' => 'required | string | min:3 | max:40',
        ]);


        if (!$validator->fails()) {
            $lounge = Lounge::where('slug', $request->slug)->first();

            if ($lounge == null) {
                return view('error-404');
            }
            $dates = explode(" - ", $request->input('date'));

            $startDate = date("Y-m-d", strtotime($dates[0]));
            $endDate = date("Y-m-d", strtotime($dates[1]));

            $toDate = Carbon::parse($startDate);
            $fromDate = Carbon::parse($endDate);

            $days = $toDate->diffInDays($fromDate);


            $clientData = array_merge($request->except('date', 'lounge_id'), [
                'sign_in' => $startDate,
                'entry_time' => Carbon::now()->toTimeString(),
                'duration' => $days,

            ]);

            $lounge = Lounge::where('id', $request->lounge_id)->first('night_price');

            $client = Client::create($clientData);

            if ($client) {
                $serialNumber = random_int(100000000, 999999999);
                $booking = Booking::create([
                    'booking_number' => $serialNumber,
                    'count_night' => $days,
                    'price' => $days *  $lounge->night_price,
                    'pay_way' => 1,
                    'client_id' => $client->id,
                    'lounge_id' => $request->lounge_id,
                    'start_date' => $startDate,
                    'end_date' => $endDate,
                ]);
            }


            return response()->json(
                [
                    'message' => $client ? __('site.saved_successfully') : __('site.failed_to_save'),
                    'booking' => $client ? $booking->slug : null
                ],
                $client ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST
            );
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function invoice($slug)
    {
        $booking = Booking::with('client', 'lounge')->where('slug', $slug)->first();
        if ($booking == null) {
            return view('error-404');
        }
        return view('frontend.invoice', ['booking' => $booking]);
    }
}
