<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListCupom extends Model
{
    protected $table= 'list_cupons';
    protected $fillable = array('document', 'status');
}
