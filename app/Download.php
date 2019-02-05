<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table= 'downloads';
    protected $fillable = array('full_name', 'company', 'phone', 'email', 'ip', 'download_url', 'times');


    public static function sumDownloads($url)
    {
        return Download::where('download_url', $url)->sum('times');
    }
}
