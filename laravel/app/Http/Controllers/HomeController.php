<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Brand;
use App\Pilot;

class HomeController extends Controller
{

    public function index()
    {
        $cars = Car::where('deleted', false) -> get();

        return view('pages.home', compact('cars'));
    }

    public function show($id) {

        $car = Car::findOrFail($id);
        return view('pages.show', compact('car'));
    }
}
