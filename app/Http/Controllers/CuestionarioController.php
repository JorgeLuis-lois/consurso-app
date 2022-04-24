<?php

namespace App\Http\Controllers;

use App\Models\Temas;
use Illuminate\Http\Request;

class CuestionarioController extends Controller
{
    public function __invoke()
    {
        $temas = Temas::all();
        return view('welcome', compact('temas'));
    }
}
