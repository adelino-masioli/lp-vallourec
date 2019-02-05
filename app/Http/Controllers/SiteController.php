<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


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
        return view('site.index');
    }

    public function downloadEbook()
    {
        return view('site.download');
    }

    public function downloadEbookSuccess()
    {
        return view('site.download');
    }

    public function downloadEbookPdf()
    {
        return response()->download('./download/vallourec-e-book.pdf', "Vallourec E-book");
    }


    public function downloadEbookPost(Request $request)
    {
        try{
            // $messages = [
            //     'full_name:required' => 'Favor preencher o nome completo',
            //     'company:required'   => 'Favor informar a empresa',
            //     'phone:required'     => 'Favor informar o telefone',
            //     'email:required'     => 'Favor informar um email válido',
            //     'email:email'        => 'Favor informar um email válido',
            // ];
            
            // $validate =  Validator::make($request->all(), [
            //     'full_name' => 'required|max:255',
            //     'company'   => 'required|max:255',
            //     'phone'     => 'required|max:255',
            //     'email'     => 'required|email|max:255',
            // ], $messages);

            // if ($validator->fails())
            // {
            //     return redirect()->back()->withErrors($validator->errors());
            //     exit();
            // }

            $select_by_id = Download::where('ip', $request->ip)->where('email', $request->email);

            if($select_by_id->count() == 0){
                Download::create($request->all());
            }else{
                $download = $select_by_id->first();
                $download->times = $download->times+1;
                $download->save();
            }

            return redirect()->route('download-e-book-success', base64_encode($request->email));

        }catch(\Exception $e){
            \Session::flash('messageclass', 'danger');
            \Session::flash('messageform', 'Erro ao salvar!');
            return back()->withInput();
        }
    }

}
