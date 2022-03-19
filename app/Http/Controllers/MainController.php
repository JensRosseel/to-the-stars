<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function home()
    {
        $planets = Planet::all('name');
        return view('home', ['planets' => $planets]);
    }

    function planet(Request $request)
    {
        $planets = Planet::all('name');
        $data = Planet::where('name', $request->page)->first();
        return view('planet', ['planets' => $planets, 'data' => $data]);
    }
}
