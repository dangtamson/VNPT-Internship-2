<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tieuchidanhgia extends Model
{
    protected $table = 'tieuchidanhgia';
    protected $primaryKey = 'id_ch';
    protected $fillable = [
        'noidungch', 'id_lv'
    ];

public $timestamps = false;

public function linhvuc()
    {
        return $this->belongsTo('App\Linhvuc','id_lv','id_lv');
    }

 

}