<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_date','>',\DB::raw('CURRENT_DATE()'))->get();
        return view('home', compact('trains')); // Passa la variabile $trains alla vista
    }

}
