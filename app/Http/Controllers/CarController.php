<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all([]);
        return $cars;
    }
    public function store(Request $request)
    {
        $car = new Car();
        $car->subject = $request->subject;
        $car->spec = $request->spec;
        $car->save();
        return $car;
    }
}
