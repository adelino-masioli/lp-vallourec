@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p style="padding-bottom:8px;">
                        <small class="pull-right">Contagem de Downloads</small>
                    </p>
                </div>

                <div class="panel-body">

                   <table class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center col-md-10">ORIGEM DA URL DE DOWNLOADS</th>  
                                <th class="text-center col-md-2">QUANTIDADE</th>     
                            </tr>
                        </thead>
                        <tbody>
                        @if ($datadownloads->count() > 0)
                        
                            @foreach ($datadownloads as $list)                        
                            <tr>
                                <td>{{$list->download_url == 'download-e-book' ? 'Site/Redes Socials/Google' : 'Leitura do QRCode'}}</td>
                                <td class="text-center">{{$list->sumDownloads($list->download_url)}}</td>
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




    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p style="padding-bottom:8px;">
                        <small class="pull-right">Downloads por Cadastros</small>
                    </p>
                </div>

                <div class="panel-body">

                   <table class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">NOME COMPLETO</th>  
                                <th class="text-center">EMPRESA</th> 
                                <th class="text-center">TELEFONE</th> 
                                <th class="text-center">EMAIL</th> 
                                <th class="text-center">DATA</th> 
                                <th class="text-center">QTD</th> 
                            </tr>
                        </thead>
                        <tbody>
                        @if ($datadownload_registers->count() > 0)
                            @foreach ($datadownload_registers as $list)                        
                            <tr>
                                <td>{{$list->full_name}}</td>
                                <td>{{$list->company}}</td>
                                <td>{{$list->phone}}</td>
                                <td>{{$list->email}}</td>
                                <td>{{$list->created_at->format('d/m/Y')}}</td>                                
                                <td class="text-center">{{$list->sumDownloads($list->download_url)}}</td>
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
