<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Models\Car;
use \App\Models\Collector;

class LandingPageController extends Controller
{
    // best to refactor this as this is repetitive.
    // check is user is authenticated or not.

    public function getAllForHome(){
        $cars = Car::count();
        $collectors = Collector::count();
        return view('landing.home', compact(['cars','collectors']));
    }

    public function getAllForDashboard(){
        $cars = Car::count();
        $collectors = Collector::count();
        return view('dashboard', compact(['cars','collectors']));
    }


}
