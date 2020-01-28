<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

        //DB::table('users')
        //->where('id', Auth::id())
        //->update(['started' =>Carbon::now()]);

        $date = Carbon::now();
        $carbon_date = Carbon::parse($date);
        $carbon_date->addHours(1);
        if (session('start') == null) {
            session()->put('start', $carbon_date);
        }

        return view('home');
    }
    public function logicInfo()
    {
        return view('logicInfo');
    }

    public function assembler()
    {
        return view('assembler');
    }

    public function instructionset()
    {
        return view('instructionset');
    }
    public function logicP()
    {
        return view('logicP');
    }
    public function binaryHex()
    {
        return view('binaryHex');
    }
    public function decomp()
    {
        return view('decomposition ');
    }
    public function c()
    {
        return view('c');
    }
    public function logicPA()
    {


        $input =  $_POST["inputvalue1"];
        if ($input == 1011) {
            return view('logicP')->with('result', 'Very logical ,you found the first step ,logically where to next?');
        } else {

            return view('logicP')->with('result', 'Ha not very logical are you, your gonna have to learn the basics first');
        }
    }
}
