<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        $VAC = compact('items');

        return view('home',$VAC);
    }

    /**
     * Show the Company info.
     *
     * @return \Illuminate\Http\Response
     */
    public function us()
    {
        return view('us');
    }

    /**
     * Show the frequently asked questions.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('faq');
    }

    /**
     * Show the logged users info.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $this->middleware('auth');
        return view('profile');
    }
}
