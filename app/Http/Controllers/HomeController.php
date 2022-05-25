<?php

namespace App\Http\Controllers;

use App\Models\ahli_daftar;
use App\Models\Main;
use Illuminate\Support\Facades\Auth;
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
        $ahli = ahli_daftar::where('user_id',Auth::user()->id)->get();
        return view('home', compact('ahli'));
    }
}
