<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khaosat extends Model
{
     protected $table = 'khaosat';
    protected $primaryKey = 'id_ks';
    protected $fillable = [
        'tenks', 'ngaybd', 'ngaykt'
    ];

public $timestamps = false;

public function tieuchidanhgia()
    {
        return $this->hasMany('App\Tieuchidanhgia','id_ch','id_ch');
    }
}
