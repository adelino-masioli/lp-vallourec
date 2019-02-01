@foreach($games as $game)
<div class="row">
        <div class="col-xs-12 col-md-12 text-center fh5co-heading">
                <h1 class="h1-title title-fuor animated fadeInUp">
                        A cada partida, novas emoções.<br/>
                        Confira os jogos da rodada.<br/>                         
                        <span class="ctrl pull-left icon icon-arrow-left" onclick="navigation('left', '{{$game->id}}');"></span>
                        {{$game->title}}
                        <span class="ctrl pull-right icon icon-arrow-right" onclick="navigation('right', '{{$game->id}}');"></span>
                </h1>
        </div>

        
        
        <div class="col-xs-12 col-md-10 col-md-offset-1 text-center fh5co-heading results-play"> 

                <div class="row">
                        @foreach(\App\Round::getRouds($game->id) as $round)
                        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 text-center">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 animated fadeInRightBig">
                                        <small class="datetimeround">{{$round->date}}</small>
                                </div>

                                <div class="col-xs-5 col-md-5 showres animated fadeInRightBig">
                                        <img src="{{asset('escudos/'.$round->teamA->flag)}}" class="img-responsive" alt="{{$round->teamA->name}}">
                                        <p class="nametime">{{$round->teamA->name}}</p>
                                        <span class="placar">{{$round->result_a}}</span>
                                </div>
                                <div class="col-xs-2 col-md-2 showres showresx animated fadeInRightBig"><h2>X</h2></div>
                                <div class="col-xs-5 col-md-5 showres animated fadeInRightBig">
                                        <img src="{{asset('escudos/'.$round->teamB->flag)}}" class="img-responsive" alt="{{$round->teamB->name}}">
                                        <p class="nametime">{{$round->teamB->name}}</p>
                                        <span class="placar">{{$round->result_b}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
        </div>
    </div>
</div>
@endforeach 