<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traloikhaosat extends Model
{
    protected $table = 'tl_ks';
    protected $primaryKey = 'id_tlks';
    protected $fillable = [
        'id_pks', 'id_bc','id'
    ];

public $timestamps = false;



 

}