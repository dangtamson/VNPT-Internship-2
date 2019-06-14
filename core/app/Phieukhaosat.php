<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phieukhaosat extends Model
{
    protected $table = 'phieukhaosat';
    protected $primaryKey = 'id_pks';
    protected $fillable = [
        'id_ch', 'id_ks'
    ];

public $timestamps = false;

public function tieuchidanhgia()
    {
        return $this->belongsTo('App\Tieuchidanhgia','id_ch','id_ch');
    }

 

}