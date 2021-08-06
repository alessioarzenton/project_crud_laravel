<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Mail\CarMail;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CarController extends Controller
{
    //CRUD metodi per CREATE
    public function create()
    {
        return view('cars.create');
    }
    public function store(CarRequest $request)
    {
        $car = new Car();
        $car->model = $request->model;
        $car->brand = $request->brand;
        $car->img = $request->img;
        $car->price = $request->price;
        $car->year = $request->year;
        $car->save();

        Mail::to('info@crudalessio.it')->send(new CarMail($car));
        return redirect()->back()->with('message','Macchina aggiunta con successo!');
    }

    //CRUD metodi per READ
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    //CRUD metodi per UPDATE
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }
    public function update(Car $car, CarRequest $request)
    {
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->year = $request->year;
        $car->img = $request->img;
        $car->save();

        return redirect()->back()->with('message','Macchina modificata con successo!');
    }

    //CRUD metodi per DELETE
    public function delete(Car $car)
    {
        $car->delete();

        return redirect(route('cars.index'));
    }
}
