<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Lounge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;

class LoungeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lounges = Lounge::paginate(10);
        return view('dashboard.lounge.index', ['lounges' => $lounges]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.lounge.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:40',
            'city' => 'required | string | min:3 | max:40',
            'address' => 'required | string | min:3 | max:150',
            'short_description' => 'required',
            'description' => 'required',
            // 'night' => 'required | numeric',
            'night_price' => 'required | numeric',
            'images' => 'required',
        ]);

        if (!$validator->fails()) {
            $lounge = Lounge::create($request->except('images'));
            if ($lounge && $request->images != null) {
                foreach ($request->images as $image) {
                    saveNewImage($image, 'images/lounge', $lounge);
                }
            }
            return response()->json(['message' => $lounge ? __('site.saved_successfully') : __('site.failed_to_save')], $lounge ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $lounge = Lounge::with('bookings')->where('slug', $slug)->first();

        if ($lounge == null) {
            return view('error-404');
        }
        $bookings = $lounge->bookings()->paginate(5);

        return view('dashboard.lounge.show', [
            'lounge' => $lounge,
            'bookings' => $bookings
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $lounge = Lounge::where('slug', $slug)->first();

        if ($lounge == null) {
            return view('error-404');
        }

        return view('dashboard.lounge.edit', ['lounge' => $lounge]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:40',
            'city' => 'required | string | min:3 | max:40',
            'address' => 'required | string | min:3 | max:150',
            'short_description' => 'required',
            'description' => 'required',
            // 'night' => 'required | numeric',
            'night_price' => 'required | numeric',
            'images' => 'nullable',
        ]);

        if (!$validator->fails()) {
            $lounge = Lounge::where('slug', $slug)->first();

            if ($lounge == null) {
                return view('error-404');
            }

            $lounge->update($request->except('images'));

            if ($lounge && $request->images != null) {
                foreach ($request->images as $image) {
                    saveNewImage($image, 'images/lounge', $lounge);
                }
            }

            return response()->json(['message' => $lounge ? __('site.updated_successfully') : __('site.failed_to_update')], $lounge ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lounge $lounge)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->get('search');
        $lounges = Lounge::where('name', 'like', '%' . $query . '%')
            ->orWhere('city', 'like', '%' . $query . '%')
            ->orWhere('address', 'like', '%' . $query . '%')
            ->orWhere('night', 'like', '%' . $query . '%')
            ->orWhere('night_price', 'like', '%' . $query . '%')
            ->orderBy('id', 'desc')->get();
        return view('dashboard.lounge.search', ['lounges' => $lounges]);
    }

    public function deleteImage($id)
    {
        $image = Image::where('id', $id)->first();
        if (File::exists($image->url)) {
            File::delete($image->url);
        }
        $isDeleted = $image->delete();
        return response()->json(
            ['message' => $isDeleted ? __('site.deleted_successfully') : __('site.failed_to_delete')],
            $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }
}
