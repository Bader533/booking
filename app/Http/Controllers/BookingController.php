<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Lounge;
use App\Rules\DateBooking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::with('client:id,f_name,l_name', 'lounge:id,name')->paginate(10);
        return view('dashboard.booking.index', ['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::get();
        $lounges = Lounge::get();
        return view('dashboard.booking.create', ['clients' => $clients, 'lounges' => $lounges]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            // 'count_night' => 'required | numeric',
            // 'price' => 'required | numeric',
            'pay_way' => 'required | numeric',
            'client_id' => 'required | numeric',
            'lounge_id' => 'required | numeric',
            'date' => ['required', new DateBooking($request->lounge_id, null)],
        ]);

        if (!$validator->fails()) {
            $dates = explode(" - ", $request->input('date'));

            $startDate = date("Y-m-d", strtotime($dates[0]));
            $endDate = date("Y-m-d", strtotime($dates[1]));
            $toDate = Carbon::parse($startDate);
            $fromDate = Carbon::parse($endDate);

            $days = $toDate->diffInDays($fromDate);
            $loungePrice = Lounge::where('id', $request->lounge_id)->first('night_price');

            $totalPrice = $days * $loungePrice->night_price;
            $bookingData = array_merge($request->except('date', 'count_night', 'price'), [
                'start_date' => $startDate,
                'end_date' => $endDate,
                'count_night' => $days,
                'price' => $totalPrice,
            ]);

            $booking = Booking::create($bookingData);
            return response()->json(
                [
                    'message' => $booking ? __('site.saved_successfully') : __('site.failed_to_save')
                ],
                $booking ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST
            );
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $booking = Booking::with('client:id,f_name')->where('id', $id)->first();

        if ($booking == null) {
            return view('error-404');
        }
        $clients = Client::get();
        $lounges = Lounge::get();
        return view('dashboard.booking.edit', [
            'clients' => $clients,
            'lounges' => $lounges,
            'booking' => $booking
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            // 'count_night' => 'required | numeric',
            // 'price' => 'required | numeric',
            'pay_way' => 'required | numeric',
            'client_id' => 'required | numeric',
            'lounge_id' => 'required | numeric',
            'date' => ['required', new DateBooking($request->lounge_id, $id)],
        ]);

        if (!$validator->fails()) {
            $booking = Booking::where('id', $id)->first();

            if ($booking == null) {
                return view('error-404');
            }
            $dates = explode(" - ", $request->input('date'));

            $startDate = date("Y-m-d", strtotime($dates[0]));
            $endDate = date("Y-m-d", strtotime($dates[1]));
            $toDate = Carbon::parse($startDate);
            $fromDate = Carbon::parse($endDate);

            $days = $toDate->diffInDays($fromDate);
            $loungePrice = Lounge::where('id', $request->lounge_id)->first('night_price');

            $totalPrice = $days * $loungePrice->night_price;

            $bookingData = array_merge($request->except('date', 'count_night', 'price'), [
                'start_date' => $startDate,
                'end_date' => $endDate,
                'count_night' => $days,
                'price' => $totalPrice,
            ]);

            $booking->update($bookingData);

            return response()->json(
                [
                    'message' => $booking ? __('site.updated_successfully') : __('site.failed_to_update')
                ],
                $booking ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST
            );
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function search(Request $request)
    {
        if ($request->get('pay_way') != null && $request->get('query') == null) {

            $bookings = Booking::where('pay_way', $request->get('pay_way'))->orderBy('id', 'desc')->get();
        } elseif ($request->get('pay_way') == null && $request->get('query') != null) {

            $query = $request->get('query');
            $bookings = Booking::whereHas('client', function ($queries) use ($query) {
                $queries->where('f_name', 'like', '%' . $query . '%')
                    ->orWhere('l_name', 'like', '%' . $query . '%')
                    ->orWhere('phone', 'like', '%' . $query . '%');
            })->orderBy('id', 'desc')->get();
        } else {

            $query = $request->get('query');
            $bookings = Booking::where(function ($queries) use ($request, $query) {
                $queries->where('pay_way', $request->get('pay_way'))
                    ->where(function ($queries) use ($query) {
                        $queries->whereHas('client', function ($queries) use ($query) {
                            $queries->where('f_name', 'like', '%' . $query . '%')
                                ->orWhere('l_name', 'like', '%' . $query . '%')
                                ->orWhere('phone', 'like', '%' . $query . '%');
                        });
                    });
            })->orderBy('id', 'desc')->get();
        }

        return view('dashboard.booking.search', ['bookings' => $bookings]);
    }
}
