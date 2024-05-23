<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::all(); // Recupera tutti i treni
        return view('home', compact('trains')); // Passa la variabile $trains alla vista
    }

}
