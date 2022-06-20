<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        // searchbar from TODO #9 .
        $cars = Car::paginate(15);
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCarRequest $request)
    {
        $myNewData = [
            "code" => $request->code,
            "manufacturer" => $request->manufacturer,
            "model" => $request->model,
            "price" =>$request->price,
        ];
        Car::create($myNewData);

        return redirect()->route('cars.index')->with('success', 'new car record successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact(['car']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact(['car']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $myNewData = [
            "code" => $request->code,
            "manufacturer" => $request->manufacturer,
            "model" => $request->model,
            "price" =>$request->price,
        ];
        Car::create($myNewData);

        return redirect()->route('cars.index')->with('success', 'new car record successfully updated');
    }

    /*
     *  Display the delete-specific resource
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     *
     * */
    public function delete(Car $car)
    {
        return view('cars.delete', compact(['car']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
