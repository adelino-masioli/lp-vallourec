<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Round;
use Image;
use Illuminate\Support\Str;
use App\Team;

class RoundController extends Controller
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

    public function storeRound(Request $request)
    {
        try{
            $data   = $request->all();
            $array  = Round::create($data);

            \Session::flash('messageclass', 'success');
            \Session::flash('messageform', 'Salvo com sucesso!');
            return redirect()->back();

        }catch(\Exception $e){
            \Session::flash('messageclass', 'danger');
            \Session::flash('messageform', 'Erro ao salvar!');
            return back()->withInput();
        }
    }


    public function updateRound(Request $request)
    {
        try{
            $round  = Round::findOrFail($request->id);
            $data   = $request->all();
            $round->fill($data)->save();

            return json_decode(1);

        }catch(\Exception $e){
            return json_decode(2);
        }
    }


    public function destroyRound($id)
    {
        try{
            $id = $id;

            $round  = Round::find($id);   

            $round->delete();
            
            \Session::flash('messageclass', 'success');
            \Session::flash('messageform', 'Excluido com sucesso!');
            return back()->withInput();
        
        }catch(\Exception $e){
            \Session::flash('messageclass', 'danger');
            \Session::flash('messageform', 'Erro ao excluir!');
            return back()->withInput();
        }
    }
}
