@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">                    
                    <p style="padding-bottom:8px;">
                        <a class="btn btn-xs btn-primary pull-left" href="{{url('home')}}">Voltar para listagem</a>
                        <small class="pull-right">Edição da rodada <strong>[{{$game->title}}]</strong> </small>
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


                   <form method="post" action="/game-update" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <input name="id" type="hidden" value="{{ $game->id }}" />

                        <div class="row">
                            <div class="form-group col-md-7">
                                <label for="file">Descrição da rodada</label>
                                <input name="title" type="text" class="form-control" value="{{ isset($game) ? $game->title : old('title')}}" placeholder="Informe a descrição da rodada" required />
                            </div>
                            <div class="form-group col-md-1">
                                    <label for="order">Ordem</label>
                                    <input name="order" type="text" class="form-control" value="{{ isset($game) ? $game->order : old('order')}}" placeholder="Ordem" required />
                                </div>
                            <div class="form-group col-md-3">
                                <label for="file">Status</label>
                                <select name="status"  class="form-control">
                                    <option value="1" {{ $game->status == 1 ? 'selected' : ''}} >Correndo</option>
                                    <option value="2" {{ $game->status == 2 ? 'selected' : ''}} >Aconteceu</option>
                                    <option value="3" {{ $game->status == 3 ? 'selected' : ''}} >Vai acontecer</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-default" style="margin-top:26px;">Salvar</button>
                            </div>
                        </div>
                  </form>

                  <form method="post" action="/round-store" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <input name="game_id" type="hidden" value="{{ $game->id }}" />

                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="file">Time A</label>
                                <select name="team_a_id"  class="form-control" required>
                                    @foreach($teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="file">Time B</label>
                                <select name="team_b_id"  class="form-control" required>
                                    @foreach($teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="file">Data e Horas</label>
                                <input name="date" type="text" class="form-control" placeholder="Data e Horas" required />
                            </div>

                            <div class="form-group col-md-1">
                                <label for="file">Casa</label>
                                <input name="result_a" type="text" class="form-control"  placeholder="Casa" />
                            </div>

                            <div class="form-group col-md-1">
                                <label for="file">Fora</label>
                                <input name="result_b" type="text" class="form-control"  placeholder="Fora" />
                            </div>

                            <div class="form-group col-md-2">
                                <label for="file">Ordem</label>
                                <input name="order" type="number" min="0" class="form-control"  placeholder="Ordem" required />
                            </div>

                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-default" style="margin-top:26px;">Salvar</button>
                            </div>
                        </div>
                </form>


                <input id="_token" name="_token" type="hidden" value="{{ csrf_token() }}" />

                <table class="table table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center col-md-2">TIME A</th>
                            <th class="text-center col-md-2">TIME B</th>
                            <th class="text-center col-md-3">DATA E HORAS</th>
                            <th class="text-center col-md-1">A</th>
                            <th class="text-center col-md-1">B</th>
                            <th class="text-center col-md-1">ORDEM</th>
                            <th class="text-center col-md-2">AÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if ($rounds->count() > 0)
                    
                        @foreach ($rounds as $round)                        
                        <tr id="tr_{{$round->id}}">
                            <td class="text-center"><img class="pull-left" width="35" src="{{asset('escudos/'.$round->teamA->flag)}}" alt="{{$round->teamA->name}}">{{$round->teamA->name}}</td> 
                            <td class="text-center"><img class="pull-left" width="35" src="{{asset('escudos/'.$round->teamB->flag)}}" alt="{{$round->teamB->name}}">{{$round->teamB->name}}</td> 
                            <td class="text-center"><input type="text" name="date" class="form-control" id="date{{$round->id}}" value="{{$round->date}}"></td>
                            <td class="text-center"><input type="text" name="result_a" class="form-control" id="result_a{{$round->id}}" value="{{$round->result_a}}"></td>
                            <td class="text-center"><input type="text" name="result_b" class="form-control" id="result_b{{$round->id}}" value="{{$round->result_b}}"></td>
                            <td class="text-center"><input type="text" name="order" class="form-control" id="order{{$round->id}}" value="{{$round->order}}"></td>
                            <td class="text-center">
                                <button class="btn btn-xs btn-success" onclick="updateRound('{{$round->id}}');">ATUALIZAR</button>
                                <a class="btn btn-xs btn-danger" href="/round-destroy/{{$round->id}}">EXCLUIR</a>
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
