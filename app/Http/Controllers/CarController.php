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

    public function show($id)
    {
        try {
            $car = Car::findOrFail($id);
            return $car;
        } catch (\Throwable $th) {
            return response("usuario não encontrado", 400);
        }
    }

    public function update(Request $request)
    {
        try {
            return Car::findOrFail($request->id)->update($request->all());
        } catch (\Throwable $th) {
            return response("usuario não encontrado", 400);
        }
    }

    public function destroy($id)
    {
        try {
            return Car::findOrFail($id)->delete();
        } catch (\Throwable $th) {
            return response("usuario não encontrado", 400);
        }
    }
}
