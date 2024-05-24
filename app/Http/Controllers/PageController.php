<?php

namespace App\Http\Controllers;
use App\Models\Train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $trains = Train::where('departure_time','like','2024-05-24%')->get();
        
        return view('app', compact('trains'));
    }
}
