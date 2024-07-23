<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;

class CarController extends Controller
{
    public function index()
    {
        $cars=Car::paginate(4);
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $brands = Brand::all();
        return view('cars.create');
    }

    public function store(StoreCarRequest $request)
    {
        Car::create($request->all())->extras()->attach($request->extras);

        return redirect()->route('cars.index')->with(['success'=>'Car created successfully.']);
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        $car->extras()->sync($request->extras);
        return redirect()->route('cars.index')->with(['success'=>'Car updated successfully.']);
    }

    public function destroy(Car $car)
    {
        $car->extras()->detach();
        $car->delete();
        return redirect()->route('cars.index')->with(['success'=>'Car deleted successfully.']);
    }
}
