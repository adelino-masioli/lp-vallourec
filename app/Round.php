<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $table= 'rounds';
    protected $fillable = array('game_id', 'team_a_id', 'team_b_id', 'date', 'result_a', 'result_b', 'order');



    public function teamA() {
        return $this->belongsTo('App\Team', 'team_a_id');
    }

    public function teamB() {
        return $this->belongsTo('App\Team', 'team_b_id');
    }

    public static function getRouds($id)
    {
        return Round::where('game_id', $id)->orderBy('order', 'asc')->get();
    }
}
