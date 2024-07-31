<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Slider;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::paginate();
        $sliders = Slider::paginate();

        return view('welcome', compact('proyectos', 'sliders'));
    }
}

