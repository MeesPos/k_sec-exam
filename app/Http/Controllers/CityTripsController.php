<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CityTrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tymon\JWTAuth\Exceptions\UserNotDefinedException;

class CityTripsController extends Controller
{
    /**
     * Index page of City trips
     */
    public function index()
    {
        $request = Request::create('/api/city-trips', 'GET');

        $response = \Route::dispatch($request);

        dd($response);

        return view('pages.city-trips');
    }
    /**
     * Returns all the City trips
     *
     * @return \Illuminate\Database\Eloquent\Collection|array
     */
    public function all(Request $request)
    {
        $citytrips = CityTrip::all();

        return$citytrips;

        return response()->json([$citytrips]);
    }
}
