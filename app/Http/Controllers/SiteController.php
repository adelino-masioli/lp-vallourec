<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Image;
use Illuminate\Support\Str;
use App\Team;
use App\Round;

class SiteController extends Controller
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

    public function index()
    {
        $games = Game::where('status', 1)->orderBy('order', 'asc')->get();
        return view('site.index', compact('games'));
    }

    public function next($id)
    {
        $lastid =  Game::orderBy('id', 'desc')->first();
        $nextid = $id == $lastid->id? 1 : $id+1;

        $gamesres = Game::where('id', $nextid)->orderBy('order', 'asc');
        if($gamesres->count() > 0){
            $games = $gamesres->get();
            $count = $gamesres->count();
            return view('site.partials.partialfive', compact('games', 'count'));
        }else{
            return 'false';
        }
    }

    public function prev($id)
    {
        $lastid =  Game::orderBy('id', 'desc')->first();
        $nextid = $id == 1 ? $lastid->id : $id-1;
        $gamesres = Game::where('id', $nextid)->orderBy('order', 'asc');
        if($gamesres->count() > 0){
            $games = $gamesres->get();
            $count = $gamesres->count();
            return view('site.partials.partialfiveleft', compact('games', 'count'));
        }else{
            return 'false';
        }
    }

}
