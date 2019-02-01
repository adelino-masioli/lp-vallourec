<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
    protected $table= 'cupons';
    protected $fillable = array('document', 'serie', 'cupom', 'uar', 'singular');
}
