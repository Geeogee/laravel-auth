<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Brand;
use App\Pilot;

class LoggedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id) {

        $car = Car::findOrFail($id);
        $brands = Brand::all();
        $pilots = Pilot::all();

        return view('pages.edit', compact('car', 'brands', 'pilots'));
    }

    public function update(Request $request, $id) {

        $validated = $request -> validate([
            'name' => 'required|min:3|max:30',
            'model' => 'required|min:3|max:20',
            'kw' => 'required|integer|min: 30| max: 100'
        ]);

        $car = Car::findOrFail($id);
        $car -> update($validated);

        $car -> brand() -> associate($request -> brand_id);
        $car -> save();

        $car -> pilots() -> sync($request -> pilots_id);
        $car -> save();

        return redirect() -> route('show', $car -> id);
    }

    public function delete($id) {

        $car = Car::findOrFail($id);

        $car -> deleted = true;
        $car -> save();

        return redirect() -> route('home');
    }
}
