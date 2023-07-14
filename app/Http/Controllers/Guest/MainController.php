<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Route;

class MainController extends Controller
{
    public function index()
    {
        $routes = Route::orderBy('orario_di_partenza')->get();

        return view('home', compact('routes'));
    }
}
