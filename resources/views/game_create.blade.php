@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p style="padding-bottom:8px;">
                        <a class="btn btn-xs btn-primary pull-left" href="{{url('home')}}">Voltar para listagem</a>
                        <small class="pull-right">Cadastro de rodada</small>
                    </p>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('messageform'))
                        <div id="message-send" class="alert alert-<?php echo  \Session::get('messageclass'); ?>"><?php echo  \Session::get('messageform'); ?></div>
                    @else
                        <div id="message-send"></div>
                    @endif


                   <form method="post" action="/game-store" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label for="file">Descrição da rodada</label>
                            <input name="title" type="text" class="form-control" value="{{old('title')}}" placeholder="Informe a descrição da rodada" required />
                        </div>
                        <button type="submit" class="btn btn-default">Avançar</button>
                  </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
