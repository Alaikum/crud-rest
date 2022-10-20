<?php

namespace App\Http\Controllers\Admin;  //va aggiunto \Admin

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;   //va aggiunta se lo spostiamo

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
}
