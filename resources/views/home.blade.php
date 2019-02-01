@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p style="padding-bottom:8px;">
                        <a class="btn btn-xs btn-primary pull-left" href="{{url('game-create')}}">Criar nova rodada</a>
                        <small class="pull-right">Listagem de Rodadas </small>
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

                   <table class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center col-md-7">DESCRIÇÃO DA RODADA</th>
                                <th class="text-center col-md-2">STATUS</th>      
                                <th class="text-center col-md-1">ORDEM</th>      
                                <th class="text-center col-md-2">AÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($data->count() > 0)
                        
                            @foreach ($data as $list)                        
                            <tr>
                                <td>{{$list->title}}</td>            
                                <td class="text-center">
                                    @if($list->status == 1)
                                        Correndo
                                    @elseif($list->status == 2)
                                        Aconteceu
                                    @else
                                        Vai acontecer
                                    @endif
                                </td>
                                <td>{{$list->order}}</td>
                                <td class="text-center text-danger">
                                    <a class="btn btn-xs btn-danger" href="{{url('game-destroy')}}/{{$list->id}}">EXCLUIR</a>
                                    <a class="btn btn-xs btn-primary" href="{{url('game-show')}}/{{$list->id}}">EDITAR</a>
                                </td>
                            </tr>
                            @endforeach                        
                        @else
                            <tr>
                                <td colspan="3" class="text-center">Nenhum resultado</td>
                            </tr>
                        @endif
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
