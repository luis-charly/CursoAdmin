<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth', ['only' => 'admin']);
    }


    public function index(){
        return view('login');
    }

    public function admin()
    {
        return view('dashboard.dashboard');
    }

    public function register()
    {
        return view('registro');
    }
}
