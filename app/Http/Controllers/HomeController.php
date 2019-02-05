<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datadownloads = Download::orderBy('id', 'asc')->groupBy('download_url')->get();
        $datadownload_registers = Download::orderBy('id', 'asc')->groupBy('email')->get();

        return view('home', compact('datadownloads', 'datadownload_registers'));
    }
}
