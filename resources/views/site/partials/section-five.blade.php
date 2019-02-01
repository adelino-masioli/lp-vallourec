<div id="lk_section_five"></div>
<div class="form-show-1 fh5co-section-five" id="fh5co-section-one">
    <span class="fh5co-section-five-left"></span>
    <div class="container fh5co-section-five-content showrodadas" style="overflow:hidden;">
       @foreach($games as $game)
	<div class="row animate-box">
                <div class="col-xs-12 col-md-12 text-center fh5co-heading">
                        <h1 class="h1-title title-fuor">
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
                                        <div class="col-xs-12 col-md-12 animated animate-box">
                                                <small class="datetimeround">{{$round->date}}</small>
                                        </div>
                                        <div class="col-xs-5 col-md-5 showres animate-box">
                                                <img src="{{asset('escudos/'.$round->teamA->flag)}}" class="img-responsive" alt="{{$round->teamA->name}}">
                                                <p class="nametime">{{$round->teamA->name}}</p>
                                                <span class="placar">{{$round->result_a}}</span>
                                        </div>
                                        <div class="col-xs-2 col-md-2 showres showresx animate-box"><h2>X</h2></div>
                                        <div class="col-xs-5 col-md-5 showres animate-box">
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
    <span class="fh5co-section-five-right"></span>
</div>