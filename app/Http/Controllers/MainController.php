<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function home()
    {
        $planets = Planet::all();
        return view('home', ['planets' => $planets]);
    }

    function planet()
    {
        $planets = Planet::all();
        return view('planet', ['planets' => $planets]);
    }
}
