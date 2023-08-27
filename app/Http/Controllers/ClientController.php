<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(10);
        return view('dashboard.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'f_name' => 'required | string | min:3 | max:40',
            'l_name' => 'required | string | min:3 | max:40',
            'phone' => 'required | numeric',
            'nationality' => 'required | string | min:3 | max:40',
            'client_kind' => 'required | string | min:3 | max:40',
            'id_kind' => 'required | string | min:3 | max:40',
            'id_copy' => 'required | string | min:3 | max:40',
            'visa_number' => 'required | numeric',
            'sign_in' => 'required | date',
            'entry_time' => 'required',
            'duration' => 'required | numeric',
            'arrival_destination' => 'required | string | min:3 | max:40',
        ]);

        if (!$validator->fails()) {
            $client = Client::create($request->all());
            return response()->json(['message' => $client ? __('site.saved_successfully') : __('site.failed_to_save')], $client ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $client = Client::where('slug', $slug)->first();

        if ($client == null) {
            return view('error-404');
        }

        return view('dashboard.clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $client = Client::where('slug', $slug)->first();

        if ($client == null) {
            return view('error-404');
        }

        return view('dashboard.clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $validator = Validator($request->all(), [
            'f_name' => 'required | string | min:3 | max:40',
            'l_name' => 'required | string | min:3 | max:40',
            'phone' => 'required | numeric',
            'nationality' => 'required | string | min:3 | max:40',
            'client_kind' => 'required | string | min:3 | max:40',

            'id_kind' => 'required | string | min:3 | max:40',
            'id_copy' => 'required | string | min:3 | max:40',
            'visa_number' => 'required | numeric',

            'sign_in' => 'required | date',
            'entry_time' => 'required',
            'duration' => 'required | numeric',
            'arrival_destination' => 'required | string | min:3 | max:40',
        ]);

        if (!$validator->fails()) {
            $client = Client::where('slug', $slug)->first();

            if ($client == null) {
                return view('error-404');
            }

            // $client = $client::update($request->all());
            $client->update($request->all());

            return response()->json(['message' => $client ? __('site.updated_successfully') : __('site.failed_to_update')], $client ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->get('search');
        $clients = Client::where('f_name', 'like', '%' . $query . '%')
            ->orWhere('l_name', 'like', '%' . $query . '%')
            ->orWhere('phone', 'like', '%' . $query . '%')
            ->orWhere('nationality', 'like', '%' . $query . '%')
            ->orWhere('visa_number', 'like', '%' . $query . '%')
            ->orderBy('id', 'desc')->get();

        return view('dashboard.clients.search', ['clients' => $clients]);
    }
}
