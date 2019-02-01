<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Image;
use Illuminate\Support\Str;
use App\Team;
use App\Round;

class GameController extends Controller
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
        $data = Game::orderBy('id', 'asc')->get();
        return view('home', compact('data'));
    }

    public function createGame()
    {
        return view('game_create');
    }

    public function showGame($id)
    {
        $game = Game::findOrFail($id);
        $teams = Team::orderBy('name', 'asc')->get();
        $rounds = Round::where('game_id', $id)->orderBy('order', 'asc')->get();
        return view('game_edit', compact('game', 'teams', 'rounds'));
    }


    public function storeGame(Request $request)
    {
        try{
            $data['title']   = $request->title;
            $data['order']   = 1;
            $data['status']  = 3;
            $array           = Game::create($data);

            if ($array->save()):
                \Session::flash('messageclass', 'success');
                \Session::flash('messageform', 'Salvo com sucesso!');
                return redirect('/game-show'.'/'.$array->id);
            else:
                \Session::flash('messageclass', 'danger');
                \Session::flash('messageform', 'Erro ao salvar!');
                return back()->withInput();
            endif;

        }catch(\Exception $e){
            \Session::flash('messageclass', 'danger');
            \Session::flash('messageform', 'Erro ao salvar!');
            return back()->withInput();
        }
    }


    public function updateGame(Request $request)
    {
        try{
            $game   = Game::findOrFail($request->id);
            $data   = $request->all();
            $game->fill($data)->save();

            \Session::flash('messageclass', 'success');
            \Session::flash('messageform', 'Salvo com sucesso!');
            return back();

        }catch(\Exception $e){
            \Session::flash('messageclass', 'danger');
            \Session::flash('messageform', 'Erro ao salvar!');
            return back()->withInput();
        }
    }


    public function destroyGame($id)
    {
        try{
            $id = $id;

            $game  = Game::find($id);   
            
            if($game->status == 2){
                $game->delete();

                \Session::flash('messageclass', 'success');
                \Session::flash('messageform', 'Excluido com sucesso!');
                return back()->withInput();
            }else{
                \Session::flash('messageclass', 'danger');
                \Session::flash('messageform', 'Erro ao excluir. Já foi <strong>ASSOCIADO</strong> jogos nessa rodada!');
                return back()->withInput();
            }
        
        }catch(\Exception $e){
            \Session::flash('messageclass', 'danger');
            \Session::flash('messageform', 'Erro ao excluir!');
            return back()->withInput();
        }
    }
}
