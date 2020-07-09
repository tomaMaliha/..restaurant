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
        $categories = Manu::whereIn('resto_id' , $resto_id)
        ->get()
        ->groupBy('category.name');
        return view('home' , compact('categories'));
    }
}
