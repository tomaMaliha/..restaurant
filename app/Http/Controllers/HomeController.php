<?php

namespace App\Http\Controllers;

use App\Models\Manu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $resto_id = [1];
        $restoId = 1;
        $categories = Manu::where('resto_id' , $restoId)
        ->get()
        ->groupBy('category.name');
        // return view('home' , compact('categories'));
        return view('admin.master' , compact('categories', 'restoId'));
    }
}
