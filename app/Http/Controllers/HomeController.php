<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\Compra;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    }
 */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$id = auth()->user()->id;
        //$autos = Auto::all()->with('user')->where('id',$id);
        $autos = Auto::all();
        return view('catalogo')->with('autos',$autos);
    }
}
